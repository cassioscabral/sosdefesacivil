<?php
$this->breadcrumbs=array(
	'Ocorrencia Tipos',
);

$this->menu=array(
	array('label'=>'Create OcorrenciaTipo', 'url'=>array('create')),
	array('label'=>'Manage OcorrenciaTipo', 'url'=>array('admin')),
);
?>

<h1>Ocorrencia Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
