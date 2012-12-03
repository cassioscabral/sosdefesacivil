<center>
    Perfil "<?= $model->descricao; ?>" adicionado com sucesso!
    <br/>
    <br/>
    <?= CHtml::link('Voltar a listagens de perfis', Yii::app()->request->baseUrl . '/usuario/perfil', array('class' => 'btn primary')); ?>
</center>