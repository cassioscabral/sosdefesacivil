<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'perfil-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'descricao'); ?>
        <?php echo $form->textField($model, 'descricao', array('size' => 60, 'maxlength' => 80)); ?>
        <?php echo $form->error($model, 'descricao'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Concluir' : 'Salvar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->