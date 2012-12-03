<?php
$this->breadcrumbs=array(
	'Ocorrencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ocorrencia', 'url'=>array('index')),
	array('label'=>'Create Ocorrencia', 'url'=>array('create')),
	array('label'=>'Update Ocorrencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ocorrencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ocorrencia', 'url'=>array('admin')),
);
?>

<h1>View Ocorrencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data_hora',
		'protocolo',
		'solicitante',
		'apelido',
		'usuario_id',
		'endereco',
		'numero',
		'complemento',
		'localidade',
		'bairro',
		'referencia',
		'fone1',
		'fone2',
		'obs',
	),
)); ?>
