<div class="center">
    <div style="width: 998px; margin: auto; ">
        
        <h2>Ok!</h2>
        
        <div class="form_login" style="height: 125px !important;">
            <div class="form_intro">
                <div id="logoUFCG" style="float: right; display: block;">
                    <? //= CHtml::image(Yii::app()->baseUrl . '/img/logo.jpg'); ?>
                </div>
            </div>
            <form style="margin: 0px 0px 0px 90px;"style="" method="post" action="<?= Yii::app()->request->baseUrl; ?>/usuario/senha/recovery">
                <div class="text-n-label">
                    <b>Digite sua nova senha: </b><br/>
                    <input style="margin: 10px 0px 0px 0px;" type="password" name="senha">
                    <input type="hidden" name="key" value="<?=$_GET['key']?>">
                    <input style="margin: 5px 0px 0px 5px;"type="submit" class="btn btn-primary" value="Concluir">
                </div>
            </form>
        </div>
    </div>
</div>