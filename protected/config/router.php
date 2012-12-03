<?php
return array(
    'urlFormat' => 'path',
    'showScriptName' => false,
    //'urlSuffix'=> '.html',
    'caseSensitive' => false,
    'rules' => array(
        'gii' => 'gii',
        'logout' => 'site/logout',
        '/' => 'site/home',
        'forgotpassword' => 'usuario/senha/forgotpassword',
        'rallyparaiba' => 'rallyparaiba/inscricao/nova',
        'rallyparaiba/inscritos' => 'rallyparaiba/inscricao/admin',
        'sucesso' => 'rallyparaiba/inscricao/sucesso',
        'usuarios' => 'usuario/default/lista',
        'usuarios/moderacao' => 'usuario/default/admin',
        'profile/edit' => 'usuario/default/update',
        'usuario/adicionar' => 'usuario/default/create',
        'lembrar-senha' => 'usuario/default/senha',
        'registro' => 'usuario/default/registro',
        'livros/euli' => 'leitores/adicionar',
        'livros/naoli' => 'leitores/remover',
        'preferencia' => 'preferencia/MinhasPreferencias',
    ),
);
?>