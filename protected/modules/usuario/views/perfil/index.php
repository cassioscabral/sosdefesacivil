<?php
$this->breadcrumbs=array(
	'Perfils',
);

$this->menu=array(
	array('label'=>'Create Perfil', 'url'=>array('create')),
	array('label'=>'Manage Perfil', 'url'=>array('admin')),
);
?>

<h1>Perfils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
