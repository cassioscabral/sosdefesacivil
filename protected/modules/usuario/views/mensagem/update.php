<?php
$this->breadcrumbs=array(
	'Usuario Mensagems'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioMensagem', 'url'=>array('index')),
	array('label'=>'Create UsuarioMensagem', 'url'=>array('create')),
	array('label'=>'View UsuarioMensagem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsuarioMensagem', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioMensagem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>