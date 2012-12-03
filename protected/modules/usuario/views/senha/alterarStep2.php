<script>
jQuery(function(){
        $("#submit").click(function(){
        $(".error").hide();
        var hasError = false;
        var passwordVal = $("#password").val();
        var checkVal = $("#password-check").val();
        if (passwordVal == '') {
            $("#password").after('<span class="error">Digite a senha</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#password-check").after('<span class="error">Repita a senha</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            $("#password-check").after('<span class="error">As senhas não coincidem</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});
</script>

<style>
    .error {
        color: red;
        margin: 0px 0px 0px 5px;
        font-size: 11px;
        text-transform: uppercase
    }
    #password{
        margin: 10px 0px 0px 0px;
    }
    #password-check {
        margin: 10px 0px 0px 0px;
    }
    #submit {
        margin: 5px 0px 0px 0px;    
    }
    .form_login
    {
        height: 239px !important;
    }
    .form_login form 
    {
        margin: 0px 0px 0px 90px;
    }
</style>

<div class="center">
    <div style="width: 998px; margin: auto; ">
        <div class="form_login">
            <form method="post" action="<?= Yii::app()->request->baseUrl; ?>/usuario/senha/alterarStep2">
                <div class="text-n-label">
                    <b>Digite a nova senha: </b><br/>
                    <input type="password" type="text" id="password" name="novasenha">
		    <input type="hidden" type="text" value="<?=$usuario?>" name="usuario">
                    <br/>
                    <br/>
                    <b>Repita a mesma senha: </b><br/>
                    <input type="password" type="text" id="password-check" name="novasenhaConfirmacao">
                    <br/>
                <input id="submit" style=""type="submit" class="btn btn-primary" value="Continuar...">
                </div>
            </form>
        </div>
    </div>
</div>