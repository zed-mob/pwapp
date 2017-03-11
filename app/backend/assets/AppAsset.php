<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/assets';
    public $baseUrl = '@web/assets';
    public $css = [
		 '/themes/clip-admin/assets/vendor/bootstrap/css/bootstrap.min.css',
		 '/themes/clip-admin/assets/vendor/fontawesome/css/font-awesome.min.css',
		 '/themes/clip-admin/assets/vendor/themify-icons/themify-icons.min.css',
		['/themes/clip-admin/assets/vendor/animate.css/animate.min.css', 'media' => 'screen'],
		['/themes/clip-admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.css', 'media' => 'screen'],
		['/themes/clip-admin/assets/vendor/switchery/switchery.min.css', 'media' => 'screen']
    ];
    public $js = [
		'/themes/clip-admin/assets/vendor/modernizr/modernizr.js',
		'/themes/clip-admin/assets/vendor/jquery-cookie/jquery.cookie.js',
		'/themes/clip-admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js',
		'/themes/clip-admin/assets/vendor/switchery/switchery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
    ];
}
