<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {

        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];

            $model->username = str_replace("'", "", $model->username);
            $model->password = str_replace("'", "", $model->password);


            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
            // $this->redirect(Yii::app()->user->returnUrl);
                if (Yii::app()->user->isGuest) {
                    $this->redirect(array('site/home'));
                } else {

                    $usuarioLogado = Yii::app()->user->objeto->id;

                    $UsuarioLog = new UsuarioLog;
                    $UsuarioLog->usuario_id = $usuarioLogado;
                    $UsuarioLog->descricao = "Efetuou login";
                    $UsuarioLog->save(false);

                    $online = Usuario::model()->findByPk($usuarioLogado);
                    $online->online = 1;
                    $online->save();

                    $this->redirect(array('site/home'));

                    //echo Yii::app()->user->perfil;
//                    switch (Yii::app()->user->perfil) {
//                        case 'admin':
//                            //Yii::app()->setTheme('');
//                            break;
//                        case 'jornalismo':
//                            $this->redirect(array('subscritores/index'));
//                            break;
//                        case 'disparador':
//                            $this->redirect(array('subscritores/index'));
//                            break;
//                    }
                }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        $UsuarioLog = new UsuarioLog;

        $usuarioLogado = Yii::app()->user->objeto->id;

        $UsuarioLog->usuario_id = $usuarioLogado;
        $UsuarioLog->descricao = "Efetuou logout";
        $UsuarioLog->save(false);


        $online = Usuario::model()->findByPk($usuarioLogado);
        $online->online = 0;
        $online->save();

        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionHome() {

        if (Yii::app()->params['debug']) {
            Y::metodos();
        }
        if (!Yii::app()->user->isGuest) {

            $online = Yii::app()->db->createCommand($sql = '
                    SELECT
                        usuario.nome,
                        usuario.matricula,
                        usuario.email,
                        usuario.telefone,
                        orgao.id,
                        orgao.nome AS "Órgão"
                    FROM 
                        usuario AS usuario
                    INNER JOIN 
                        sic_orgao AS orgao
                    ON 
                        usuario.orgao_id = orgao.id AND usuario.online = 1;
                    ')->queryAll();


            switch (Yii::app()->user->perfil) {
                case 'agencia':
                    $this->redirect(array('marketing/mkrBriefing/index'));
                    //Yii::app()->setTheme('');
                    break;
                case 'Jornalismo':
                    $this->redirect(array('subscritores/'));
                    break;
                case 'Disparador':
                    $this->redirect(array('subscritores/index'));
                    break;
                case 'sic':
                    $this->redirect(array('sic/'));
                    break;
            }

            $ocorrenciasPendentes = Yii::app()->db->createCommand($sql = '
                select * from ocorrencia WHERE tramitacao = 0 ORDER BY prioridade DESC;
                    ')->queryAll();
            $this->render('dashboard', 
                    array(
                        'online' => $online, 'ocorrenciasPendentes' => $ocorrenciasPendentes));
        } else {
            $this->render('login');
        }
    }

}