
<style>
    #concluir
    {
        position: absolute;
        left: 820px;
        top: 100px;
    }
    .hero-unit {
        position: relative !important;
    }
    .rowDadosBasicos {
        width: 400px;
        float: left;
        position: relative;
    }
    .rowStatus  {
        width: 300px;
        position: absolute;
        top: 471px;

    }
    .rowStatus input {
        float: left;
        margin: 0px 5px 0px 0px;
    }
    .rowStatus label{
        float: left;
        margin: 0px 10px 0px 0px;
    }
    .rowPerfil {
        float: left;
    }
    .rowPerfil select{
        height: 500px;
    }
    .rowOrgao {
        float: left;
        margin: 0px 0px 0px 20px;
    }
    .rowOrgao select{
        height: 500px;
    }

</style>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'usuario-form',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
            )));
    ?>
    <p class="note"><span class="required">*</span> Campos obrigatórios</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="rowDadosBasicos">
        <h4>Dados</h4>
        <div class="row">
            <?php echo $form->labelEx($model, 'nome'); ?>
            <?php echo $form->textField($model, 'nome', array('size' => 60, 'maxlength' => 120)); ?>
            <?php echo $form->error($model, 'nome'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'senha'); ?>
            <?php echo $form->passwordField($model, 'senha', array('size' => 60, 'maxlength' => 60)); ?>
            <?php echo $form->error($model, 'senha'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 120)); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

        <div class="row" style="display: none;">
            <?php
            $this->widget('xupload.XUpload', array(
                'url' => Yii::app()->createUrl("usuario/default/upload2"),
                'model' => $model,
                'attribute' => 'avatar',
                'multiple' => true,
            ));
            ?>


            <?
            $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                'id' => 'uploadFile',
                'config' => array(
                    'action' => Yii::app()->createUrl('usuario/default/upload'),
                    'allowedExtensions' => array("jpg", "png"), //array("jpg","jpeg","gif","exe","mov" and etc...
                    'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                    //'minSizeLimit' => 10 * 1024 * 1024, // minimum file size in bytes
                    'minSizeLimit' => 1024, // minimum file size in bytes
                //'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
                //'messages'=>array(
                //                  'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                //                  'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                //                  'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                //                  'emptyError'=>"{file} is empty, please select files again without it.",
                //                  'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                //                 ),
                //'showMessage'=>"js:function(message){ alert(message); }"
                )
            ));
            ?>
        </div>
    </div>

    <div class="rowPerfil">
        <h4>Perfil</h4>
        <?php
        // dropDownList
        echo $form->ListBox($model, 'perfil_id', CHtml::listData(Perfil::model()->findAll(array('order' => 'descricao')), 'id', 'descricao'), array('class' => 'campos'));
        ?>
        <?php echo $form->error($model, 'perfil_id'); ?>
    </div>

    <div class="rowOrgao" style="display: none;">
        <h4>Órgão</h4>
        <?php echo $form->ListBox($model, 'orgao_id', CHtml::listData(Orgao::model()->findAll(array('order' => 'nome')), 'id', 'nome'), array('class' => 'campos')); ?>
        <?php echo $form->error($model, 'orgao_id'); ?>
    </div>

    <div class="rowStatus">
        <h4>Status</h4>
        <?php
        /* echo $form->dropDownList($model, 'status', array(
          '0' => 'Desativado',
          '1' => 'Ativo'
          ), array('class' => 'campos')); */
        ?>
        <?php echo $form->error($model, 'status'); ?>    


        <?
        echo $form->radioButton($model, 'status', array(
            'value' => 0,
            'uncheckValue' => null
        ));
        ?>
        <label>Bloqueado</label>

        <?
        echo $form->radioButton($model, 'status', array(
            'value' => 1,
            'uncheckValue' => null
        ));
        ?>
        <label>Desbloqueado</label>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', array('class' => 'btn btn-primary', 'id' => 'concluir')); ?>
        <?php // echo CHtml::link('Cancelar', 'usuario/admin', array('class' => 'btn btn-danger'));     ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->