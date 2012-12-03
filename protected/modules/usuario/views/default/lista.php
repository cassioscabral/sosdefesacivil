<? foreach ($model as $m) : ?>
    <li style="width: 100%;">
        <? Avatar::fotoPerfil($m->id, 1) ?>
        <?= $m->nome; ?></br>
        <?= CHtml::link('Nova mensagem', Yii::app()->request->baseUrl . "/mensagem/create?para=".$m->id, array('class' => 'btn-logout')); ?>
    </li>    
<? endforeach; ?>