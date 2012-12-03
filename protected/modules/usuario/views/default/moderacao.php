<?php
$this->breadcrumbs = array(
    'Usuários' => array('index'),
    'Listar',
);
?>
<div style="width: 95%;">

    <h1>Moderação</h1>
    <br>
    <h3>Aprovados</h3>
    <br>


    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $habilitado,
        'template' => "{items}",
        'itemsCssClass' => 'table table-striped table-bordered table-condensed',
        'columns' => array(
            array('name' => 'id', 'header' => '#'),
            array('name' => 'nome', 'header' => 'Nome'),
            array(
                'header' => 'Perfil',
                'value' => '$data->perfil->descricao',
            ),
//            array(
//                'header' => 'Órgão',
//                'value' => '$data->orgao->nome',
//            ),
            array(
                'header' => '',
                'type' => 'html',
                //'value' => 'CHtml::link("Visualizar",CHtml::normalizeUrl(array("orgao/view/","orgao"=>$data->orgao_id)))',
                'value' => 'CHtml::link( "Desaprovar", Yii::app()->createUrl("usuario/default/desaprovar",array("uid" => $data->id, "email"=>$data->email, "nome" => $data->nome)))',
                'visible' => U::validate(array('admin'))
            ),
//            array(
//                //'class' => 'bootstrap.widgets.BootButtonColumn',
//                'htmlOptions' => array('style' => 'width: 50px'),
//                //'template' => '{view}',
//                'viewButtonUrl' => 'Yii::app()->createUrl("orgao/view",array("id"=>$data->orgao_id))'
//            )
        )
    ));
    ?>

    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $desabilitado,
        'template' => "{items}",
        'itemsCssClass' => 'table table-striped table-bordered table-condensed',
        'columns' => array(
            array('name' => 'id', 'header' => '#'),
            array('name' => 'nome', 'header' => 'Nome'),
            array(
                'header' => 'Perfil',
                'value' => '$data->perfil->descricao',
            ),
//            array(
//                'header' => 'Órgão',
//                'value' => '$data->orgao->nome',
//            ),
            array(
                'header' => '',
                'type' => 'html',
                //'value' => 'CHtml::link("Visualizar",CHtml::normalizeUrl(array("orgao/view/","orgao"=>$data->orgao_id)))',
                'value' => 'CHtml::link( "Desaprovar", Yii::app()->createUrl("usuario/default/desaprovar",array("uid" => $data->id, "email"=>$data->email, "nome" => $data->nome)))',
                'visible' => U::validate(array('admin'))
            ),
//            array(
//                //'class' => 'bootstrap.widgets.BootButtonColumn',
//                'htmlOptions' => array('style' => 'width: 50px'),
//                //'template' => '{view}',
//                'viewButtonUrl' => 'Yii::app()->createUrl("orgao/view",array("id"=>$data->orgao_id))'
//            )
        )
    ));
    ?>
</div>
