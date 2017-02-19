<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'css/bootstrap-theme.css',
        'css/bootstrap-theme.min.css',
        'dist/css/AdminLTE.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/alt/AdminLTE-bootstrap-social.css',
        'dist/css/alt/AdminLTE-bootstrap-social.min.css',
        'dist/css/alt/AdminLTE-fullcalendar.css',
        'dist/css/alt/AdminLTE-fullcalendar.min.css',
        'dist/css/alt/AdminLTE-select2.css',
        'dist/css/alt/AdminLTE-select2.min.css',
        'dist/css/alt/AdminLTE-without-plugins.css',
        'dist/css/alt/AdminLTE-without-plugins.min.css',


    ];
    public $js = [
    'dist/js/app.js',
    'dist/js/app.min.js',
    'dist/js/demo.js',
    'dist/js/pages/dashboard.js',
    'dist/js/pages/dashboard.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
