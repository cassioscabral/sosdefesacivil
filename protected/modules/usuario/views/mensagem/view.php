<?php
$this->breadcrumbs=array(
	'Usuario Mensagems'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsuarioMensagem', 'url'=>array('index')),
	array('label'=>'Create UsuarioMensagem', 'url'=>array('create')),
	array('label'=>'Update UsuarioMensagem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsuarioMensagem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioMensagem', 'url'=>array('admin')),
);
?>

<h1>View UsuarioMensagem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data_envio',
		'data_leitura',
		'destinatario',
		'remetente',
		'mensagem',
	),
)); ?>
