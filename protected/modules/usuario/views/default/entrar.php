<div class="center">

    <div style="width: 998px; margin: auto; ">
        <div class="form_login">
            <div class="form_intro">
                <div id="logoUFCG">
                    <?= CHtml::image(Yii::app()->baseUrl . '/images/ufcg.png'); ?>
                </div>
            </div>
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                    ));
            ?>
            <div class="item">
                <?php echo $form->labelEx($model, 'E-mail'); ?>
                <?php echo $form->textField($model, 'username'); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="item">
                <?php echo $form->labelEx($model, 'Senha'); ?>
                <?php echo $form->passwordField($model, 'password'); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="rememberMe">
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
                <?php echo $form->label($model, '&nbsp; Permanecer conectado'); ?>
                <?php echo $form->error($model, 'rememberMe'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton(' Entrar ', array('class' => 'btn btn-primary')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>