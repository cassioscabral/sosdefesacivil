<div class="center">

    <div style="width: 998px; margin: auto; ">
        <div class="form_login" style="height: 125px !important;">
            <div class="form_intro">
                <div id="logoUFCG" style="float: right; display: block;">
                    <?//= CHtml::image(Yii::app()->baseUrl . '/img/logo.jpg'); ?>
                </div>
            </div>
            <form style="margin: 0px 0px 0px 90px;"style="" method="post" action="<?= Yii::app()->request->baseUrl; ?>/usuario/senha/sendpassword">
                <div class="text-n-label">
                    <b>Digite o seu endereço de e-mail: </b><br/>
                    <input style="margin: 10px 0px 0px 0px;" type="text" name="email">
                <input style="margin: 5px 0px 0px 5px;"type="submit" class="btn btn-primary" value="Recuperar">
                </div>
            </form>
        </div>
    </div>
</div>