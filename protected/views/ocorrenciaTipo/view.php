<?php
$this->breadcrumbs=array(
	'Ocorrencia Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OcorrenciaTipo', 'url'=>array('index')),
	array('label'=>'Create OcorrenciaTipo', 'url'=>array('create')),
	array('label'=>'Update OcorrenciaTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OcorrenciaTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OcorrenciaTipo', 'url'=>array('admin')),
);
?>

<h1>View OcorrenciaTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ocorrencia_id',
		'tipo_id',
	),
)); ?>
