<h2>Usuários</h2>

<?= CHtml::link('Adicionar usuário', Yii::app()->request->baseUrl . '/usuario/adicionar', array('class' => 'btn primary')); ?>
<?= CHtml::link('Perfis', Yii::app()->request->baseUrl . '/usuario/perfil', array('class' => 'btn primary')); ?>
<br/>
<br/>
<span style="float: right;"class="label label-info"><?=count($model)?>  usuários cadastrados</span>
<br/>
<table class="table table-bordered table-striped">
    <thead>
        <tr><th>Usuário</th><th>E-mail</th><td>Perfil</td><th>Status</th><th></th></tr>
    </thead>
    <? for ($i = 0; $i < count($model); $i++) { ?>
        <tbody>
            <tr>
                <td>
                    <a rel="tooltip" data-placement="top" data-original-title="
                       Telefone: <?= $model[$i]['telefone']; ?> <br/> Matrícula: <?= $model[$i]['matricula']; ?>
                       "><?= $model[$i]['nome']; ?>
                    </a>
                    <br/>
                </td>
                <td><code><?= $model[$i]['email']; ?></code></td>
                <td><?= $model[$i]['perfil_id']; ?></td>
                <td>
                    <?
                    switch ($model[$i]['status']) {
                        case 0:
                            echo '<span class="label label-important">Indisponível</span>';
                            break;
                        case 1:
                            echo '<span class="label label-info">Disponível</span>';
                            break;
                        default:
                            break;
                    }
                    ?>
                </td>
                <td>
                    <? if (U::validate(array('admin'))) : ?>
                        <?= CHtml::link('Editar', Yii::app()->request->baseUrl . '/usuario/default/update/id/' . $model[$i]['id'], array('class' => 'btn btn-primary')); ?>
                        <? //= CHtml::link('Anexar', Yii::app()->request->baseUrl . '/marketing/mkrBriefing/anexar/id/' . $model[$i]['id'], array('class' => 'btn btn-info')); ?>
                        <?= CHtml::link('Excluir', Yii::app()->request->baseUrl . '/usuario/default/delete/id/' . $model[$i]['id'], array('class' => 'btn btn-danger')); ?>
                    <? endif; ?>
                </td>
        </tbody>
    <? } ?>
</table>

