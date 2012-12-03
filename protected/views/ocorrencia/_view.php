<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_hora')); ?>:</b>
	<?php echo CHtml::encode($data->data_hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('protocolo')); ?>:</b>
	<?php echo CHtml::encode($data->protocolo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitante')); ?>:</b>
	<?php echo CHtml::encode($data->solicitante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apelido')); ?>:</b>
	<?php echo CHtml::encode($data->apelido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento')); ?>:</b>
	<?php echo CHtml::encode($data->complemento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidade')); ?>:</b>
	<?php echo CHtml::encode($data->localidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencia')); ?>:</b>
	<?php echo CHtml::encode($data->referencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fone1')); ?>:</b>
	<?php echo CHtml::encode($data->fone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fone2')); ?>:</b>
	<?php echo CHtml::encode($data->fone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obs')); ?>:</b>
	<?php echo CHtml::encode($data->obs); ?>
	<br />

	*/ ?>

</div>