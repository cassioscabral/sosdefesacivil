<?php

class OcorrenciaController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'delete', 'create', 'admin', 'update'),
                'expression' => 'U::validate(array("admin"))',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Ocorrencia;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Ocorrencia'])) {
            $model->attributes = $_POST['Ocorrencia'];
            $model->usuario_id = Yii::app()->user->objeto->id;
            $model->solicitacao = $_POST['solicitacao'];
            if ($model->save())
                $tiposSelecionados = $_POST['tipo'];
            
            $peso = '';
            foreach ($tiposSelecionados as $tipo) {
                $x = new OcorrenciaTipo();
                $x->ocorrencia_id = $model->id;
                $x->tipo_id = $tipo;
                $peso += $tipo;
                $x->save();
            }
            $y = Ocorrencia::model()->findByPk($model->id);
            $y->prioridade = $peso;
            $y->save();
            $this->redirect(array('view', 'id' => $model->id));
        }
        $tipo = Tipo::model()->findAll();

        $this->render('create', array(
            'model' => $model,
            'tipo' => $tipo
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Ocorrencia'])) {
            $model->attributes = $_POST['Ocorrencia'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        $this->redirect(Yii::app()->request->baseUrl.'/ocorrencia');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new Ocorrencia('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Ocorrencia']))
            $model->attributes = $_GET['Ocorrencia'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Ocorrencia::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ocorrencia-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
