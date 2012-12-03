<div id="data">
    <?php $this->renderPartial('_ajaxContent', array('myValue' => $myValue)); ?>
</div>

<?= CHtml::ajaxButton("Carregar", CController::createUrl('helloWorld/UpdateAjax'), array('update' => '#data'));?>