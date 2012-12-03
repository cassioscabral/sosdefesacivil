<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ocorrencia-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Campos contendo <span class="required">*</span> são obrigatórios.</p>
    <p class="note"><?php echo $form->errorSummary($model); ?></p>
    <table width="100%" border="1">
        <tr>
            <td width="27%" valign="top"><span class="row"><?php echo $form->labelEx($model, 'protocolo'); ?><?php echo $form->textField($model, 'protocolo'); ?> <?php echo $form->error($model, 'protocolo'); ?> </span></td>
            <td width="28%" valign="top"><span class="row"><?php echo $form->labelEx($model, 'solicitante'); ?><?php echo $form->textField($model, 'solicitante', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'solicitante'); ?></span></td>
            <td width="45%" valign="top"><span class="row"><?php echo $form->labelEx($model, 'apelido'); ?><?php echo $form->textField($model, 'apelido', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'apelido'); ?></span></td>
        </tr>
        <tr>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'endereco'); ?><?php echo $form->textField($model, 'endereco', array('size' => 60, 'maxlength' => 255)); ?> <?php echo $form->error($model, 'endereco'); ?></span></td>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'numero'); ?><?php echo $form->textField($model, 'numero', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'numero'); ?></span></td>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'complemento'); ?><?php echo $form->textField($model, 'complemento', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'complemento'); ?></span></td>
        </tr>
        <tr>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'localidade'); ?><?php echo $form->textField($model, 'localidade', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'localidade'); ?></span></td>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'bairro'); ?><?php echo $form->textField($model, 'bairro', array('size' => 60, 'maxlength' => 255)); ?> <?php echo $form->error($model, 'bairro'); ?></span></td>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'referencia'); ?><?php echo $form->textField($model, 'referencia', array('size' => 60, 'maxlength' => 255)); ?> <?php echo $form->error($model, 'referencia'); ?></span></td>
        </tr>
        <tr>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'fone1'); ?><?php echo $form->textField($model, 'fone1', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'fone1'); ?></span></td>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'fone2'); ?><?php echo $form->textField($model, 'fone2', array('size' => 45, 'maxlength' => 45)); ?> <?php echo $form->error($model, 'fone2'); ?></span></td>
            <td valign="top"><span class="row"><?php echo $form->labelEx($model, 'obs'); ?><?php echo $form->textArea($model, 'obs', array('rows' => 6, 'cols' => 50)); ?> <?php echo $form->error($model, 'obs'); ?></span></td>
        </tr>
    </table>
    <div class="row">
        <h4>TIPOS DE OCORRÊNCIA</h4>

        <? if ($tipo) { ?>
            <ul style="margin-bottom: 40px;">
                <? for ($i = 0; $i < count($tipo); $i++) { ?>
                    <li style="float: left; width: 400px;">
                        <input type="checkbox" name="tipo[]" value="<?= $tipo[$i]['peso'] ?>" /> <?= $tipo[$i]['descricao'] ?>
                    </li>
                <? } ?>
            </ul>
            <p>
              <?
        } else {
            echo 'Não existem tipos de ocorrência registrado no banco';
        }
        ?>
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h4>SOLICITAÇÃO</h4>
            <table width="352">
              <tr>
                <td><label>
                  <input type="radio" name="solicitacao" value="LONA PLÁSTICA" id="solicitacao_0" />
                  LONA PLÁSTICA</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="radio" name="solicitacao" value="VISTÓRIA" id="solicitacao_1" />
                  VISTÓRIA</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="radio" name="solicitacao" value="ERRADICAÇÃO DE ÁRVORE" id="solicitacao_2" />
                  ERRADICAÇÃO DE ÁRVORE</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="radio" name="solicitacao" value="LIMPEZA DE CANAL" id="solicitacao_3" />
                  LIMPEZA DE CANAL</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="radio" name="solicitacao" value="OUTROS (especifique)" id="solicitacao_4" />
                  OUTROS (especifique)</label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="radio" name="solicitacao" value="LIMPEZA DE CANALETA" id="solicitacao_5" />
                  LIMPEZA DE CANALETA</label></td>
              </tr>
            </table>
            <p>&nbsp;</p>
    </div>
    <div class="row buttons">
        <center>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Concluir' : 'Salvar', array('class' => 'btn btn-primary')); ?>
        </center>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->