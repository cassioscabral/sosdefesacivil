<?php
$this->breadcrumbs = array(
    'Usuarios',
);

$this->menu = array(
    array('label' => 'Adicionar', 'url' => array('create')),
    array('label' => 'Listar', 'url' => array('admin')),
);
?>

<h1>Usuários</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>