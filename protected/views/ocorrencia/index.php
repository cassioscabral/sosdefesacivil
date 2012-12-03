<?php
$this->breadcrumbs=array(
	'Ocorrencias',
);

$this->menu=array(
	array('label'=>'Create Ocorrencia', 'url'=>array('create')),
	array('label'=>'Manage Ocorrencia', 'url'=>array('admin')),
);
?>

<h1>Ocorrencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
