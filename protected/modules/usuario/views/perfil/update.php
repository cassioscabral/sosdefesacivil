<?php
$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perfil', 'url'=>array('index')),
	array('label'=>'Create Perfil', 'url'=>array('create')),
	array('label'=>'View Perfil', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Perfil', 'url'=>array('admin')),
);
?>

<h1>Update Perfil <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>