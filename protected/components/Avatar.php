<?php

class Avatar {

    function fotoPerfil($usuario = null, $tamanho = 1) {

        $modelUsuario = Usuario::model()->findByPk($usuario);

        switch ($tamanho) {
            case 1:
                $img = Yii::app()->request->baseUrl . '/docs/usuario/' . $modelUsuario->id . '/avatar/60x80.jpg';
                break;
            case 2:
                $img = Yii::app()->request->baseUrl . '/docs/usuario/' . $modelUsuario->id . '/avatar/240x320.jpg';
                break;
            case 3:
                $img = Yii::app()->request->baseUrl . '/docs/usuario/' . $modelUsuario->id . '/avatar/240x320.jpg';
                break;
            default:
                $img = Yii::app()->request->baseUrl . '/docs/usuario/' . $modelUsuario->id . '/avatar/60x80.jpg';
                break;
        }

            echo '<img src="' . $img . '" width="55" height="70" />';
    }
}