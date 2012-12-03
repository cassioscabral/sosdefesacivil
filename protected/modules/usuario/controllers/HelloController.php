<?php

class HelloController extends CController {

    public function actionIndex() {
        $data = array();
        $data["myValue"] = "Content loaded";

        $this->render('index', $data);
    }

    public function actionTeste() {
        Yii::import('ext.yii-mail.YiiMailMessage');
        $message = new YiiMailMessage;
        $message->setBody('Message content here with HTML', 'text/html');
        $message->subject = 'My Subject';
        $message->addTo('yonatha@secom.pb.gov.br');
        $message->from = Yii::app()->params['adminEmail'];
        if(Yii::app()->mail->send($message)){
            echo 'E-mail enviado com sucesso';
        } else {
            echo 'Falha ao tentar enviar o e-mail';
        }
    }

    public function actionUpdateAjax() {
        $data = array();
        $data["myValue"] = "Content updated in AJAX";

        $this->renderPartial('_ajaxContent', $data, false, true);
    }

}

?>
