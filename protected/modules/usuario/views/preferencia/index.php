<?php
$this->breadcrumbs=array(
	'Preferencias',
);

$this->menu=array(
	array('label'=>'Create Preferencia', 'url'=>array('create')),
	array('label'=>'Manage Preferencia', 'url'=>array('admin')),
);
?>

<h1>Preferencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
