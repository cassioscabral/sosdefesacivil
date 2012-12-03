<? if (!Yii::app()->user->isGuest) { ?>
    <h2>Seja Bem Vindo <?= Yii::app()->user->objeto->nome ?></h2>
    <p>
        Descrição da aplicação
    </p>
<? } ?>

<h2>Ocorrências</h2>
<br/>
<span style="float: right;"class="label label-info"><?= count($ocorrenciasPendentes) ?>  Ocorrências pendentes</span>
<br/>
<table class="table table-bordered table-striped">
    <thead>
        <tr><th>Protocolo</th><th>Data Hora</th><td>Solicitante</td><th>Endereço</th><th></th></tr>
    </thead>
    <? for ($i = 0; $i < count($ocorrenciasPendentes); $i++) { ?>
        <tbody>
            <tr>
                <td>
                    <br/>
                    <?= $ocorrenciasPendentes[$i]['protocolo']; ?>
                </td>
                <td><code>
                    <?= $ocorrenciasPendentes[$i]['data_hora']; ?>
                    </code></td>
                <td>
                    <?= $ocorrenciasPendentes[$i]['solicitante']; ?></td>
                <td>
                   <?= $ocorrenciasPendentes[$i]['endereco']; ?>
                </td>
                <td>
                    <? if (U::validate(array('admin'))) : ?>
                        <?= CHtml::link('Editar', Yii::app()->request->baseUrl . '/usuario/default/update/id/' . $ocorrenciasPendentes[$i]['id'], array('class' => 'btn btn-primary')); ?>
                        <? //= CHtml::link('Anexar', Yii::app()->request->baseUrl . '/marketing/mkrBriefing/anexar/id/' . $ocorrenciasPendentes->id, array('class' => 'btn btn-info')); ?>
                        <?= CHtml::link('Excluir', Yii::app()->request->baseUrl . '/usuario/default/delete/id/' . $ocorrenciasPendentes[$i]['id'], array('class' => 'btn btn-danger')); ?>
                    <? endif; ?>
                </td>
        </tbody>
    <? }; ?>
</table>

