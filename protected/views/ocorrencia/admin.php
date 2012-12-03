<h3>Ocorrências</h3>

<a href="<?= Yii::app()->request->baseUrl ?>/ocorrencia/create">Registrar Ocorrências</a>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'ocorrencia-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'data_hora',
        'protocolo',
        'solicitante',
        'apelido',
        'usuario_id',
        /*
          'endereco',
          'numero',
          'complemento',
          'localidade',
          'bairro',
          'referencia',
          'fone1',
          'fone2',
          'obs',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
