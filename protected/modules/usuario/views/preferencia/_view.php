<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagem1')); ?>:</b>
	<?php echo CHtml::encode($data->imagem1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagem2')); ?>:</b>
	<?php echo CHtml::encode($data->imagem2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagem3')); ?>:</b>
	<?php echo CHtml::encode($data->imagem3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cor1')); ?>:</b>
	<?php echo CHtml::encode($data->cor1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cor2')); ?>:</b>
	<?php echo CHtml::encode($data->cor2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cor3')); ?>:</b>
	<?php echo CHtml::encode($data->cor3); ?>
	<br />

	*/ ?>

</div>