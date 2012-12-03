<h3>Mensagens</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'usuario-mensagem-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'data_envio',
        'data_leitura',
        'destinatario',
        'remetente',
        'mensagem',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
