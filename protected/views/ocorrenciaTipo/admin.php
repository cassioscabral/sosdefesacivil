<?php
$this->breadcrumbs=array(
	'Ocorrencia Tipos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OcorrenciaTipo', 'url'=>array('index')),
	array('label'=>'Create OcorrenciaTipo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ocorrencia-tipo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ocorrencia Tipos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ocorrencia-tipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ocorrencia_id',
		'tipo_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
