<?php
$this->breadcrumbs=array(
	'Ocorrencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ocorrencia', 'url'=>array('index')),
	array('label'=>'Create Ocorrencia', 'url'=>array('create')),
	array('label'=>'View Ocorrencia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ocorrencia', 'url'=>array('admin')),
);
?>

<h1>Update Ocorrencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>