<? if (!Yii::app()->user->isGuest) { ?>
    <header>
        <h1>
            Seja Bem Vindo
        </h1>
    </header>
<? } else { ?>

    <header>
        <h1>
            Login
        </h1>
    </header>
    <form style="" method="post" action="<?= Yii::app()->request->baseUrl; ?>/site/login">
        <div class="text-n-label">
            <label for="login">Login:</label><br/>
            <input type="text" name="LoginForm[username]">
        </div>
        <div class="text-n-label">
            <label for="senha">Senha:</label><br/>
            <input type="password" name="LoginForm[password]">
        </div>
        <input type="submit" class="btn" value="Entrar">
    </form>
<? } ?>

