<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/clip-admin/assets';
    public $baseUrl = '@web/themes/clip-admin/assets';
    public $css = [
		'/themes/clip-admin/assets/vendor/bootstrap/css/bootstrap.min.css',
		'/themes/clip-admin/assets/vendor/fontawesome/css/font-awesome.min.css',
		'/themes/clip-admin/assets/vendor/themify-icons/themify-icons.min.css',
		['/themes/clip-admin/assets/vendor/animate.css/animate.min.css', 'media' => 'screen'],
    ];
    public $js = [
		'/themes/clip-admin/assets/vendor/modernizr/modernizr.js',
		'/themes/clip-admin/assets/vendor/jquery-cookie/jquery.cookie.js',
    ];
}
