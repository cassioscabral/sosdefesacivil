<?php
$this->breadcrumbs=array(
	'Ocorrencia Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OcorrenciaTipo', 'url'=>array('index')),
	array('label'=>'Create OcorrenciaTipo', 'url'=>array('create')),
	array('label'=>'View OcorrenciaTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OcorrenciaTipo', 'url'=>array('admin')),
);
?>

<h1>Update OcorrenciaTipo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>