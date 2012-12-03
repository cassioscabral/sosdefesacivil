<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ocorrencia-tipo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocorrencia_id'); ?>
		<?php echo $form->textField($model,'ocorrencia_id'); ?>
		<?php echo $form->error($model,'ocorrencia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_id'); ?>
		<?php echo $form->textField($model,'tipo_id'); ?>
		<?php echo $form->error($model,'tipo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->