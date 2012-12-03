<?php
$this->breadcrumbs = array(
    'Usuarios' => array('index'),
    $model->nome,
);
?>

<h1><?php echo $model->nome ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'senha',
        'email',
        array(
            'label' => 'Status',
            'type' => 'raw',
            'value' => CHtml::encode($model->status == 0 ? 'Desativado' : 'Ativo'),
        ),
        array(
            'label' => 'Perfil',
            'type' => 'raw',
            'value' => CHtml::encode($model->perfil->descricao),
        ),
    ),
));
?>