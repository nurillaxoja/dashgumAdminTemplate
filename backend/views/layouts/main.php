<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\ThemeAsset;
use yii\helpers\Html;
use yii\helpers\Url;

ThemeAsset::register($this);

$url = Yii::$app->homeUrl.'theme/';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?= Yii::$app->homeUrl ?>" class="logo"><b>DASHGUM FREE</b></a>
        <!--logo end-->
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href=" <?= Url::to(['site/login']) ?>">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="<?= Yii::$app->homeUrl ?>"><img src="theme/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                <h5 class="centered">Marcel Newman</h5>

                <li class="mt">
                    <a class="active" href=" <?= Url::to(['site/index']) ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Bosh sahifa</span>
                    </a>
                </li>
                <li>
                    <a href=" <?= Url::to(['category-standart/index']) ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Kategoriya standarti</span>
                    </a>
                </li>
                <li>
                    <a  href=" <?= Url::to(['type-standart/index']) ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Tur standarti</span>
                    </a>
                </li>
                <li >
                    <a  href=" <?= Url::to(['language/index']) ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Tillar</span>
                    </a>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <?= $content ?>

        </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
