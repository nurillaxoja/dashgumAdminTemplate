<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        "theme/assets/css/bootstrap.css",
        "theme/assets/font-awesome/css/font-awesome.css",
        "theme/assets/css/zabuto_calendar.css",
        "theme/assets/js/gritter/css/jquery.gritter.css",
        "theme/assets/lineicons/style.css",
        "theme/assets/css/style.css",
        "theme/assets/css/style-responsive.css",
    ];

    public $js = [
//   "assets/js/jquery.js",
//   "assets/js/jquery-1.8.3.min.js",
        "theme/assets/js/bootstrap.min.js",
        "theme/assets/js/jquery.dcjqaccordion.2.7.js",
        "theme/assets/js/jquery.scrollTo.min.js",
        "theme/assets/js/jquery.nicescroll.js",
        "theme/assets/js/jquery.sparkline.js",
        "theme/assets/js/common-scripts.js",
        "theme/assets/js/gritter/js/jquery.gritter.js",
        "theme/assets/js/gritter-conf.js",

//        "assets/js/sparkline-chart.js",
//        "assets/js/zabuto_calendar.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
