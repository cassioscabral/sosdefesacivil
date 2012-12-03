<?php

class SenhaController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/main';

    //public $defaultAction = 'admin';

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
            array('allow',
                'actions' => array('alterar', 'alterarStep2'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('forgotpassword', 'sendpassword', 'recovery', 'set'),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionForgotpassword() {

        $this->render('forgotpassword');
    }

    public function actionAlterar() {
        $usuario = Usuario::model()->findByPk(Yii::app()->user->objeto->id);
        $this->render('alterar');
    }

    public function actionAlterarStep2() {

        if (!isset($_POST['novasenha'])) {
            $usuario = Usuario::model()->findByAttributes(array('senha' => md5(SALT_MD5 . $_POST['senha'])));

            if ($usuario) {
                $this->render('alterarStep2',array('usuario' => $usuario->id));
            } else {
                $this->render('alterarErro');
            }
        } else {
            $usuario = Usuario::model()->findByPk($_POST['usuario']);
            $usuario->senha = md5(SALT_MD5 . $_POST['novasenha']);
            $usuario->save();
            $this->render('alterarSucesso',array('usuario' => $usuario));
        }
    }

    public function actionSendpassword() {

        $usuario = Usuario::model()->findByAttributes(array('email' => $_POST['email']));

        if ($usuario) {

            $usuario->chave_ativacao = sha1(uniqid(mt_rand(), true));
            $usuario->save();

            try {
                // Enviando email 
                $to = $usuario->email;
                $from = Yii::app()->params['stmpUsuario'];
                $assunto = "Ecosistema - Chave de ativação de sua conta";
                $mensagem = '
                        <html> 
                        <body bgcolor="#DCEEFC"> 
                            <h2>Recuperação de senha:</h2><br/><br/>
                            Clique no link para recuperar a sua senha.<br/>
                            http://127.0.0.1/ecosistema/usuario/senha/recovery/key/' . $usuario->chave_ativacao . '
                        </body> 
                        </html>';
                $headers = "From: $from\r\n";
                $headers .= "Content-type: text/html\r\n";

                // cc + bcc 
                //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
                //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
                if (mail($to, $assunto, $mensagem, $headers)) {
                    $this->render('send', array('emailInformado' => $_POST['email']));
                } else {
                    $this->render('error', array('emailInformado' => $_POST['email']));
                }
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        } else {
            $this->render('error', array('emailInformado' => $_POST['email']));
        }
    }

    public function actionRecovery() {

        $this->layout = '//layouts/main';

        if (isset($_POST['key'])) {
            if (isset($_POST['senha'])) {

                $usuario = Usuario::model()->findByAttributes(array('chave_ativacao' => $_POST['key']));

                if ($usuario) {
                    $usuario->senha = md5(SALT_MD5 . $_POST['senha']);
                    if ($usuario->save())

                    // Enviando email 
                        $to = $usuario->email;
                    $from = Yii::app()->params['stmpUsuario'];
                    $assunto = "Ecosistema - Sua senha foi alterada com sucesso!";
                    $mensagem = '
                        <html> 
                        <body bgcolor="#DCEEFC"> 
                            <h2>Sua senha foi alterada em ' . date('d/m/Y') . '</h2><br/><br/>
                                <a href="http://www.paraiba.pb.gov.br/ecosistema">http://www.paraiba.pb.gov.br/ecosistema</a>
                        </body> 
                        </html>';
                    $headers = "From: $from\r\n";
                    $headers .= "Content-type: text/html\r\n";

                    try {
                        mail($to, $assunto, $mensagem, $headers);
                    } catch (Exception $exc) {
                        echo $exc->getTraceAsString();
                    }
                    $this->redirect(Yii::app()->request->baseUrl . '/');
                } else {
                    $this->render('errorrecovery');
                }
            } else {
                echo 'Permissão negada.';
            }
        }


        if (isset($_GET['key'])) {
            $clientGetKey = $_GET['key'];

            $usuario = Usuario::model()->findByAttributes(array('chave_ativacao' => $clientGetKey));

            if ($usuario) {
                $this->render('recovery');
            } else {
                $this->render('errorrecovery');
            }
        } else {
            $this->redirect(Yii::app()->request->baseUrl . '/');
        }
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
        $model = new Senha;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Senha'])) {
            $model->attributes = $_POST['Senha'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
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

        if (isset($_POST['Senha'])) {
            $model->attributes = $_POST['Senha'];
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
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Senha');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Senha('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Senha']))
            $model->attributes = $_GET['Senha'];

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
        $model = Senha::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'senha-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
