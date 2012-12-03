<div class="box grid-12 alpha" id="cadastro-cliente">
    <div class="title selected">
        <h3>CADASTRO</h3>
        <div class="step1">1</div>
        <span>Preencha corretamente todos os dados abaixo para comprar com tranquilidade em nossa Loja:</span>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'usuario-registro-form',
        'enableAjaxValidation' => true,
            ));
    ?>
    <?= $form->errorSummary($model); ?>
    <div class="box grid-6 alpha activebyradio" id="pessoaFisica">
        <label>
            <input type="radio" value="fisica" name="pessoa" checked="checked" class="activator" />
            <strong>PESSOA FÍSICA</strong>
        </label>
        <div class="label-n-input">
            <label for="cpf">CPF*:</label>
            <input name="cpf" type="text" class="inputtext grande" />
        </div>
        <div class="label-n-input">
            <?= $form->labelEx($model, 'nome'); ?>
            <?= $form->textField($model, 'nome', array('size' => 60, 'maxlength' => 120, 'class' => 'inputtext enorme')); ?>
            <?= $form->error($model, 'nome'); ?>

        </div>
        <div class="label-n-input">
            <label for="rg">RG*:</label>
            <input name="rg" type="text" class="inputtext grande" />
        </div>
        <div class="label-n-input">
            <label for="nascimento">Data de Nascimento*:</label>
            <input name="nascimento" type="text" class="inputtext grande" /> <span>(dd/mm/aaaa)</span>
        </div>
        <div class="label-n-input sexo">
            <label>Sexo:</label>
            <input name="sexo" type="radio" class="inputradio" value="0" title="Feminino" />
            Feminino
            <input name="sexo" type="radio" class="inputradio" value="1" title="Masculino" />
            Masculino
        </div>
    </div>
    <div class="box grid-6 omega activebyradio">
        <label>
            <input type="radio" value="juridica" name="pessoa" class="activator" />
            <strong>PESSOA JURÍDICA</strong>
        </label>
        <div class="label-n-input">
            <label for="cnpj">CNPJ*:</label>
            <input name="cnpj" type="text" class="inputtext grande" />
        </div>
        <div class="label-n-input">
            <label for="razaosocial">Razão Social*:</label>
            <input name="razaosocial" type="text" class="inputtext enorme" />
        </div>
        <div class="label-n-input">
            <label for="contato">Contato*:</label>
            <input name="contato" type="text" class="inputtext grande" />
        </div>
        <div class="label-n-input">
            <label for="ie">I.E.:</label>
            <input name="ie" type="text" class="inputtext grande" /> <span>(dd/mm/aaaa)</span>
        </div>
    </div>
    <div class="box grid-12 alpha endereco" id="enderecoContato">
        <h3>ENDEREÇO:</h3>
        <div class="label-n-input">
            <?= $form->labelEx($model, 'email'); ?>
            <?= $form->textField($model, 'email', array('size' => 60, 'maxlength' => 120, 'class' => 'inputtext enorme')); ?>
            <?= $form->error($model, 'email'); ?>
        </div>
        <div class="label-n-input">
            <label for="cep">CEP*:</label>
            <input name="cep" id="cep" type="text" class="inputtext grande" />
            <button id="btn" class="btn" onclick="return getEndereco()">Consultar</button>
        </div>
        <div class="label-n-input">
            <label for="logradouro">Logradouro*:</label>
            <input name="logradouro" id="endereco" type="text" class="inputtext enorme" />
        </div>
        <div class="label-n-input">
            <label for="complemento">Complemento*:</label>
            <input name="complemento" type="text" class="inputtext medio" />
        </div>
        <div class="label-n-input">
            <label for="bairro">Bairro*:</label>
            <input name="bairro" id="bairro" type="text" class="inputtext medio" />
        </div>
        <div class="label-n-input">
            <label for="cidade">Cidade*:</label>
            <input name="cidade" id="cidade" type="text" class="inputtext enorme" />
        </div>
        <div class="label-n-input">
            <label for="estado">Estado*:</label>
            <input type="text" name="estado" id="estado" size="2" />
        </div>
    </div>
    <div class="box grid-12 alpha">
        <h3>CONTATO:</h3>
        <div class="label-n-input">
            <label for="telefone">Telefone:</label>
            <input name="ddd-telefone" type="text" class="inputtext pequeno" />
            <input name="telefone" type="text" class="inputtext medio" />
        </div>
        <div class="label-n-input">
            <label for="celular">Celular*:</label>
            <input name="ddd-celular" type="text" class="inputtext pequeno" />
            <input name="celular" type="text" class="inputtext medio" />
        </div>
    </div>
    <div class="box grid-12 alpha">
        <h3>USUÁRIO:</h3>
        <div class="label-n-input">
            <?= $form->labelEx($model, 'senha'); ?>
            <?= $form->passwordField($model, 'senha', array('size' => 60, 'maxlength' => 60, 'class' => 'inputtext medio')); ?>
            <?= $form->error($model, 'senha'); ?>
        </div>
        <div class="label-n-input">
            <?= $form->labelEx($model, 'Confirmar senha*'); ?>
            <?= $form->passwordField($model, 'senha_confirmacao', array('size' => 60, 'maxlength' => 60, 'class' => 'inputtext medio')); ?>

        </div>
    </div>
    <div class="box grid-12 alpha">
        <input name="assinar-newsletter" id="assinar-newsletter" type="checkbox" value="1" />
        <label for="assinar-newsletter">Aceita receber emails com novidades da nossa loja?</label>
        <br class="clear" />
        <input class="btn submit" type="submit" value="" />
    </div>
    <?php $this->endWidget(); ?>
</div>