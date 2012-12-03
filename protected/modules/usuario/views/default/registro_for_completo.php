<div class="box grid-12 alpha" id="cadastro-cliente">
    <div class="title selected">
        <h3>CADASTRO</h3>
        <div class="step1">1</div>
        <span>Preencha corretamente todos os dados abaixo para comprar com tranquilidade em nossa Loja:</span>
    </div>
    <form name="f" id="f" onSubmit="return false" >
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
                <label for="nome">Nome Completo*:</label>
                <input name="nome" type="text" class="inputtext enorme" />
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
                <input name="sexo" type="radio" class="inputradio" value="Feminino" title="Feminino" />
                Feminino
                <input name="sexo" type="radio" class="inputradio" value="Masculino" title="Masculino" />
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
                <label for="nascimento">I.E.:</label>
                <input name="nascimento" type="text" class="inputtext grande" /> <span>(dd/mm/aaaa)</span>
            </div>
        </div>
        <div class="box grid-12 alpha endereco" id="enderecoContato">
            <h3>ENDEREÇO:</h3>
            <div class="label-n-input">
                <label for="email">E-mail*:</label>
                <input name="email" type="text" class="inputtext enorme" />
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
<!--                <select name="estado" class="inputtext pequeno">
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
                </select>-->
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
                <label for="senha">Senha*:</label>
                <input name="senha" type="text" class="inputtext medio" />
            </div>
            <div class="label-n-input">
                <label for="senha2">Confirme sua senha*:</label>
                <input name="senha2" type="text" class="inputtext medio" />
            </div>
        </div>
        <div class="box grid-12 alpha">
            <input name="assinar-newsletter" id="assinar-newsletter" type="checkbox" value="1" />
            <label for="assinar-newsletter">Aceita receber emails com novidades da nossa loja?</label>
            <br class="clear" />
            <input class="btn submit" type="submit" value="" />
        </div>
    </form>
</div>