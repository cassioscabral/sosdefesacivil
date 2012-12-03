<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'usuario-mensagem-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="rowOrgao">
        <?php echo $form->ListBox($model, 'destinatario', CHtml::listData(Usuario::model()->findAll(array('order' => 'nome')), 'id', 'nome'), array('class' => 'campos')); ?>
        <?php echo $form->error($model, 'destinatario'); ?>
    </div>

    <div class="row">
        <?php echo $form->textArea($model, 'mensagem', array('rows'=>6, 'cols'=>300, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'mensagem'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Salvar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->