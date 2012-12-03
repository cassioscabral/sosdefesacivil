<?php

class Y {

    function classes() {
        $declaredClasses = get_declared_classes();
        foreach (glob(Yii::getPathOfAlias('application.controllers') . "/*Controller.php") as $controller) {
            $class = basename($controller, ".php");
            if (!in_array($class, $declaredClasses))
                Yii::import("application.controllers." . $class, true);

//if you want to use reflection
            $reflection = new ReflectionClass($class);
            $methods = $reflection->getMethods();
//uncomment this if you want to get the class methods with more details
//print_r($methods);
//uncomment this if you want to get the class methods
//print_r(get_class_methods($class));
        }

//you should see a list of all Controllers/Models
        echo '<pre>';
        print_r(get_declared_classes());
        echo '</pre>';
    }

    /*
     * Retorna os métodos da classe herdados ou não
     */

    function metodos($qual = null) {
        echo '<pre>';
        if ($qual) {
//Retorna os métodos da classe Controller
            print_r(get_class_methods(get_parent_class($this)));
        } else {
// Métodos pertencnetes apenas a esta classe
            print_r(array_diff(get_class_methods($this), get_class_methods(get_parent_class($this))));
        }
        echo '</pre>';
    }

    function menuMetodos() {
        $metodos = array_diff(get_class_methods($this), get_class_methods(get_parent_class($this)));

        echo '<ul style="width:100%; float: left;">';
        foreach ($metodos as $m) {
            $acao = str_replace('action', '', $m);
            echo '<li style="float: left; margin: 0px 10px 0px 0px; list-style: none; "><a href="' . Yii::app()->request->baseUrl . '/usuario/default/' . $acao . '">' . $acao . '</li>';
        }
        echo '</ul>';
    }

    function nome() {
        echo '<pre>';

// echo get_class($this); // pega o nome da classe atual
        exit;

//exit;
        $declaredClasses = get_declared_classes();
        foreach (glob(Yii::getPathOfAlias('application.controllers') . "/*Controller.php") as $controller) {
            $class = basename($controller, ".php");
            if (!in_array($class, $declaredClasses))
                Yii::import("application.controllers." . $class, true);

//if you want to use reflection
            $reflection = new ReflectionClass($class);
            $methods = $reflection->getMethods();
//uncomment this if you want to get the class methods with more details
//print_r($methods);
//uncomment this if you want to get the class methods
//print_r(get_class_methods($class));
        }

//you should see a list of all Controllers/Models
//print_r(get_declared_classes());
        $class_methods = get_class_methods($this);

        foreach ($class_methods as $method_name) {
            echo "$method_name\n";
        }
        echo '</pre>';
    }

    function pr($content) {
        echo '<pre>';
        print_r($content);
        echo '<pre>';
    }

    function formata_data($data) {
        $data = explode('-', $data);
        $data = $data[2] . '/' . $data[1] . '/' . $data[0];
        return $data;
    }

    function formata_datahora($data) {
        /*
         * Array
          (
          [0] => 2012   ano
          [1] => 11     mês
          [2] => 07     dia
          [3] => 13     hora
          [4] => 49     minutos
          [5] => 36     segundos
          )
         */
        $data = preg_split('/[- :]/', $data);
        return $data[2] . '/' . $data[1] . '/' . $data[0] . ' ' . $data[3] . ':' . $data[4] . ':' . $data[5];
    }

}