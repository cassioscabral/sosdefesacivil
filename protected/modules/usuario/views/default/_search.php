<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
            ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'nome'); ?>
        <?php echo $form->textField($model, 'nome', array('size' => 60, 'maxlength' => 120)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'senha'); ?>
        <?php echo $form->textField($model, 'senha', array('size' => 60, 'maxlength' => 60)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 120)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'status'); ?>
        <?php echo $form->textField($model, 'status', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'agencia_id'); ?>
        <?php echo $form->textField($model, 'agencia_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'perfil_id'); ?>
        <?php echo $form->textField($model, 'perfil_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->