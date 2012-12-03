<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_envio')); ?>:</b>
	<?php echo CHtml::encode($data->data_envio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_leitura')); ?>:</b>
	<?php echo CHtml::encode($data->data_leitura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinatario')); ?>:</b>
	<?php echo CHtml::encode($data->destinatario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remetente')); ?>:</b>
	<?php echo CHtml::encode($data->remetente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mensagem')); ?>:</b>
	<?php echo CHtml::encode($data->mensagem); ?>
	<br />


</div>