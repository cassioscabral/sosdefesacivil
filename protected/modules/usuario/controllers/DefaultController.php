<?php

class DefaultController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/main';
    public $defaultAction = 'admin';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function actionUpload() {
        Yii::import("ext.EAjaxUpload.qqFileUploader");

        $folder = 'docs/usuario'; // folder for uploaded files
        $allowedExtensions = array("jpg"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
        $fileName = $result['filename']; //GETTING FILE NAME

        echo $return; // it's array
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'delete', 'create', 'admin', 'update', 'upload','log'),
                'expression' => 'U::validate(array("admin"))',
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionForgotpassword() {
        $this->render('forgotpassword');
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
        $modelUsuario = new Usuario;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($modelUsuario);

        if (isset($_POST['Usuario'])) {
            $modelUsuario->attributes = $_POST['Usuario'];
            $modelUsuario->orgao_id = 1;
            $modelUsuario->senha = md5(SALT_MD5 . $_POST['Usuario']['senha']);

            //$modelUsuario->senha = md5(SALT_MD5 . $_POST['Usuario']['senha']);

            $modelUsuario->data_cadastro = date('Y-m-d');
            $modelUsuario->avatar = CUploadedFile::getInstance($modelUsuario, 'avatar');
            if ($modelUsuario->save())

            // Preferência
                $modelPreferencia = new Preferencia;
            $modelPreferencia->usuario_id = $modelUsuario->id;
            $modelPreferencia->save();
            $this->redirect(array('admin', 'id' => $modelUsuario->id));
        }

        $this->render('create', array(
            'model' => $modelUsuario,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
//    public function actionUpdate() {
//
//
//        $id = Yii::app()->user->objeto->id;
//
//        if (Yii::app()->user->objeto->id == $id) {
//            $model = $this->loadModel($id);
//
//            if (isset($_POST['Usuario'])) {
//                $model->attributes = $_POST['Usuario'];
//                if (isset($_POST['Usuario']['avatar'])) {
//                    $model->avatar = CUploadedFile::getInstance($model, 'avatar');
//                }
//                if ($model->save())
//                    $this->redirect(array('sucessoupdate'));
//            }
//
//            $this->render('update', array(
//                'model' => $model,
//            ));
//        } else {
//            echo "Você não possui permissão para acessar essa página";
//        }
//
//        /* if (!U::validate(array('admin'))) {
//          $model = $this->loadModel(Yii::app()->user->objeto->id);
//          } */
//    }
    public function actionUpdate() {


        //$id = Yii::app()->user->objeto->id;
        $id = $_GET['id'];

        $model = $this->loadModel($id);

        if (isset($_POST['Usuario'])) {
            $model->attributes = $_POST['Usuario'];
            $model->orgao_id = $_POST['Usuario']['orgao_id'];
            $model->senha = md5(SALT_MD5 . $_POST['Usuario']['senha']);
            ;

            if (isset($_POST['Usuario']['avatar'])) {
                $model->avatar = CUploadedFile::getInstance($model, 'avatar');
            }
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('update', array(
            'model' => $model,
        ));

        /* if (!U::validate(array('admin'))) {
          $model = $this->loadModel(Yii::app()->user->objeto->id);
          } */
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Usuario');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
//    public function actionAdmin() {
//        $model = new Usuario('search');
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_GET['Usuario']))
//            $model->attributes = $_GET['Usuario'];
//
//        $this->render('admin', array(
//            'model' => $model,
//        ));
//    }
    public function actionAdmin() {
        $model = Usuario::model()->findAll();

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionLista() {

        if (Yii::app()->params['debug']) {
            Y::menuMetodos();
        }

        $model = Usuario::model()->findAll();

        $this->render('lista', array(
            'model' => $model,
        ));
    }

    public function actionModeracao() {

        $habilitado = Usuario::model()->status(1);
        $desabilitado = Usuario::model()->status(0);
        if (isset($_GET['Usuario']))
            $habilitado->attributes = $_GET['Usuario'];

        $this->render('moderacao', array(
            'habilitado' => $habilitado,
            'desabilitado' => $desabilitado,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Usuario::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'usuario-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    // Registro
    public function actionRegistro() {
        $modelUsuario = new Usuario('register');
        // uncomment the following code to enable ajax-based validation

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'usuario-registro-form') {
            echo CActiveForm::validate($modelUsuario);
            Yii::app()->end();
        }

        if (isset($_POST['Usuario'])) {


            $modelUsuario->attributes = $_POST['Usuario'];


            if ($modelUsuario->validate()) {
                // Usuário
                $modelUsuario->perfil_id = 2;
                $modelUsuario->status = 0;
                $modelUsuario->data_cadastro = date('Y-m-d');

                if ($modelUsuario->save())
                    $dadosPessoais = new UsuarioDadosPessoais;
                $dadosPessoais->attributes = array(
                    'usuario_id' => $modelUsuario->id,
                    'pessoa_tipo' => $_POST['pessoa'],
                    'cpf' => $_POST['cpf'],
                    'rg' => $_POST['rg'],
                    'data_nascimento' => date('Y-m-d', $_POST['nascimento']),
                    'genero' => $_POST['sexo'],
                    'cnpj' => $_POST['cnpj'],
                    'razao_social' => $_POST['razaosocial'],
                    'inscricao_estadual' => $_POST['ie'],
                    'cep' => $_POST['cep'],
                    'logradouro' => $_POST['logradouro'],
                    'complemento' => $_POST['complemento'],
                    'bairro' => $_POST['bairro'],
                    'cidade' => $_POST['cidade'],
                    'estado' => $_POST['estado'],
                    'telefone' => $_POST['telefone'],
                    'ddd_celular' => $_POST['ddd-celular'],
                    'celular' => $_POST['celular'],
                    'ddd_telefone' => $_POST['ddd-telefone'],
                    'telefone' => $_POST['telefone'],
                    'assinar_newsletter' => $_POST['assinar-newsletter'],
                );
                $dadosPessoais->save(false);

                $this->redirect(array('/usuario/default/sucesso'));
                return;
            }
        }
        $this->render('registro', array('model' => $modelUsuario));
    }

    // Sucesso
    public function actionSucesso() {
        $this->render('sucesso');
    }

    public function actionSucessoUpdate() {
        $this->render('sucessoupdate');
    }

    public function actionAprovar() {

        $id = $_GET['uid'];
        $nome = $_GET['nome'];
        $destinatario = $_GET['email'];

        $model = $this->loadModel($id);
        $model->status = 1;
        $model->save();

        $link = '
				<a href="http://www.paraiba.pb.gov.br/especiais/coletaseletiva/questionario/">
				http://www.paraiba.pb.gov.br/especiais/coletaseletiva/questionario/
				</a>';
        $message = "<b>" . $nome . "</b>" . " seu cadastro foi aprovado pela Comissão Estadual de Coleta Seletiva Solidária. <br><br> Clique no link para terminar de responder o questionário.

				link. " . $link;

        Yii::app()->mailer->IsSMTP();
        Yii::app()->mailer->IsHTML(true);
        Yii::app()->mailer->SMTPSecure = Yii::app()->params['smtpSecure'];
        Yii::app()->mailer->Host = Yii::app()->params['smtpServidor'];
        Yii::app()->mailer->Port = Yii::app()->params['smtpPorta'];
        Yii::app()->mailer->SMTPAuth = true;
        Yii::app()->mailer->SMTPDebug = 1;
        Yii::app()->mailer->Username = Yii::app()->params['stmpUsuario'];
        Yii::app()->mailer->Password = Yii::app()->params['smtpSenha'];
        Yii::app()->mailer->From = Yii::app()->params['stmpUsuario'];
        Yii::app()->mailer->FromName = 'Coleta Seletiva';
        Yii::app()->mailer->AddAddress($destinatario);
        Yii::app()->mailer->Subject = 'Cadastro foi aprovado pela Comissão Estadual de Coleta Seletiva Solidária';
        Yii::app()->mailer->CharSet = 'utf-8';
        Yii::app()->mailer->Body = $message;

        if (!Yii::app()->mailer->Send()) {
            echo 'Erro:' . $mail->ErrorInfo;
        } else {
            Yii::app()->user->setFlash('success', '<strong>' . $nome . '</strong> foi aprovado com sucesso!');
            $this->redirect(array('/moderacao'));
        }
    }

    public function actionDesaprovar() {

        $id = $_GET['uid'];
        $nome = $_GET['nome'];

        $model = $this->loadModel($id);
        $model->status = 0;
        $model->save();


        if (!$model->save()) {
            echo 'Erro:' . $mail->ErrorInfo;
        } else {
            Yii::app()->user->setFlash('success', '<strong>' . $nome . '</strong> foi desaprovado com sucesso!');
            $this->redirect(array('/moderacao'));
        }
    }

    public function actionLog() {
        $log = Yii::app()->db->createCommand($sql = '
            SELECT u.id, u.nome AS "Usuário", l.data AS "Data", l.descricao AS "Descrição", o.nome AS "Orgão" FROM usuario AS u
            INNER JOIN usuario_log AS l ON l.usuario_id = u.id
            INNER JOIN sic_orgao AS o ON o.id = u.orgao_id;
            ')->queryAll();

        for ($y = 0; $y < count($log); $y++) {
            echo utf8_decode($log[$y]['Data']. ' - '. $log[$y]['Usuário']. ' - '. $log[$y]['Descrição']. ' - '. $log[$y]['Orgão'].'<br/>');
        }
    }

}