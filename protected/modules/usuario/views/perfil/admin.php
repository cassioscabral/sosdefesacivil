<h2>Perfis</h2>

<?= CHtml::link('Adicionar Perfil', Yii::app()->request->baseUrl . '/usuario/perfil/create', array('class' => 'btn primary')); ?>


<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'template' => "{items}",
    'columns' => array(
        //array('name' => 'id', 'header' => '#'),
        array(
            'class' => 'ext.editable.EditableColumn',
            'name' => 'descricao',
            'headerHtmlOptions' => array('style' => 'width: 110px'),
            'editable' => array(
                'url' => $this->createUrl('perfil/update?id=' . $model->id),
                'placement' => 'right',
                'inputclass' => 'span3',
            )
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
        ),
    ),
));
?>