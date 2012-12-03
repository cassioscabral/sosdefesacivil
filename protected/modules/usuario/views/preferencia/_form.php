<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preferencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem1'); ?>
		<?php echo $form->textField($model,'imagem1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagem1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem2'); ?>
		<?php echo $form->textField($model,'imagem2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagem2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem3'); ?>
		<?php echo $form->textField($model,'imagem3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagem3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cor1'); ?>
		<?php echo $form->textField($model,'cor1',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cor1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cor2'); ?>
		<?php echo $form->textField($model,'cor2',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cor2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cor3'); ?>
		<?php echo $form->textField($model,'cor3',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cor3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->