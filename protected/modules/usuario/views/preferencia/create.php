<?php
$this->breadcrumbs=array(
	'Preferencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Preferencia', 'url'=>array('index')),
	array('label'=>'Manage Preferencia', 'url'=>array('admin')),
);
?>

<h1>Create Preferencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>