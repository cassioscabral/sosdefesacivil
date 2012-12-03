<?php
$this->breadcrumbs=array(
	'Ocorrencia Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OcorrenciaTipo', 'url'=>array('index')),
	array('label'=>'Manage OcorrenciaTipo', 'url'=>array('admin')),
);
?>

<h1>Create OcorrenciaTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>