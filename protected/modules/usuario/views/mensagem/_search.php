<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_envio'); ?>
		<?php echo $form->textField($model,'data_envio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_leitura'); ?>
		<?php echo $form->textField($model,'data_leitura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destinatario'); ?>
		<?php echo $form->textField($model,'destinatario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remetente'); ?>
		<?php echo $form->textField($model,'remetente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mensagem'); ?>
		<?php echo $form->textField($model,'mensagem',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->