<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title><?= Yii::$app->name ?></title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<?php $this->head() ?>
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/styles.css">
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/plugins.css">
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/themes/theme-2.css"/>
		<!-- end: CLIP-TWO CSS -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<!-- start: PAGE CONTENT -->
		<?= $content ?>
		<!-- end: PAGE CONTENT -->
		<!-- start: MAIN JAVASCRIPTS -->
		<?php $this->endBody() ?>
		<!-- end: MAIN JAVASCRIPTS -->
	</body>
	<!-- end: BODY -->
</html>
<?php $this->endPage() ?>
