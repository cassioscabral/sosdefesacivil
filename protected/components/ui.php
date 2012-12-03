<?php

class ui {

    public $PageTitulo = null;

    function setPageTitulo($valor) {
        if ($valor) {
            $this->PageTitulo = $valor;
        } else {
            echo 'Título não definido';
        }
    }

    function getPageTitulo() {
        return $this->PageTitulo;
    }

}

?>
