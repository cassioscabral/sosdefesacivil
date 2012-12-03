<style>
    html {
        background: url(img/bg00.jpg) no-repeat; 
        }
</style>

<div class="center">

    <div style="width: 998px; margin: auto; ">
        <div class="form_login">
            <div class="form_intro">
                <div id="logoUFCG" style="float: right; display: none;">
                    <?= CHtml::image(Yii::app()->baseUrl . '/img/logo.jpg'); ?>
                </div>
            </div>
            <form style="" method="post" action="<?= Yii::app()->request->baseUrl; ?>/site/login">
                <div class="text-n-label">
                    <b>E-mail: </b><br/>
                    <input type="text" name="LoginForm[username]">
                </div>
                <div class="text-n-label">
                    <b>Senha:</b><br/>
                    <input type="password" name="LoginForm[password]">
                </div>
                <input type="submit" class="btn btn-primary" value="Entrar">
                <a style="font-size: 11px; margin: 0px 0px 0px 10px;" href="<?= Yii::app()->request->baseUrl; ?>/usuario/senha/forgotpassword">Não lembro da minha senha</a>
            </form>
        </div>
    </div>
</div>