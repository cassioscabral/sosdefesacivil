<!DOCTYPE html>
<html>
    <head>
        <title><?= Yii::app()->name ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="<?= Yii::app()->request->baseUrl ?>/themes/ecosistema/images/favicon.png">
        <!--[if lt IE 9]>
        <script src="#http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::app()->request->baseUrl; ?>/css/custom.css" />

        <link href='#http://fonts.googleapis.com/css?family=Oxygen|Quicksand' rel='stylesheet' type='text/css' />

        <!-- Le javascript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="#<?= Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" type="text/css" media="screen" />        
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/global.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-transition.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-alert.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-modal.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-dropdown.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-scrollspy.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-tab.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-tooltip.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-popover.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-button.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-collapse.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-carousel.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-typeahead.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap-affix.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/js/application.js"></script>

    </head>
    <body>
        <header id="principal" style="display: none;">
            <a href="<?= Yii::app()->request->baseUrl; ?>/" class="apptitle">
            </a>
        </header>

        <div style="position: absolute; right: 5px; top: 5px;">
            <? if (!Yii::app()->user->isGuest) { ?>
                Logado como <b><?= Yii::app()->user->objeto->nome ?></b>
                <?= CHtml::link(' (Alterar Senha)', Yii::app()->request->baseUrl . "/usuario/senha/alterar", array('class' => 'btn-logout')); ?> 
                - 
                <?= CHtml::link(' Sair', Yii::app()->request->baseUrl . "/logout", array('class' => 'btn-logout')); ?>
            <? } ?>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <? if (!Yii::app()->user->isGuest) { ?>
                    <div class="span3">
                        <div class="well sidebar-nav">

                            <ul class="nav nav-list">

                                <li class="nav-header">Menu</li>

                                <li class="active"><a href="<?= Yii::app()->request->baseUrl ?>/">Início</a></li>

                                <li>
                                    <a href="<?= Yii::app()->request->baseUrl ?>/ocorrencia/">Registrar Ocorrência</a>
                                </li>

                                <? if (U::validate(array("admin"))) : ?>
                                    <?php
                                    $modules = array_keys(Yii::app()->getModules());
                                    foreach ($modules as $m) :
                                        ?>

                                        <li>
                                            <a href="<?= Yii::app()->request->baseUrl ?>/<?= $m ?>"><?= ucfirst(strtolower($m)); ?></a>
                                        </li>
                                        <?
                                    endforeach;
                                    ?>
                                <? endif; ?>
                            </ul>

                        </div><!--/.well -->
                    </div><!--/span-->

                    <div class="span9">
                        <div class="hero-unit">
                            <?= $content; ?>
                        </div>
                        <hr>

                        <footer>
    <!--                        <p>&copy; Yonatha Almeida yonathalmeida@gmail.com (83) 9173-2814</p>-->
                        </footer>

                    </div><!--/.fluid-container-->

                <? } else { ?>
                    <?= $content; ?>
                <? } ?>
                </body>
                </html>