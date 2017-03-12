<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="<?= Yii::$app->charset ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<?= Html::csrfMetaTags() ?>
	    <title><?= Html::encode($this->title) ?></title>
		<!-- start: MAIN CSS -->
		<?php $this->head() ?>
		<!-- end: MAIN CSS -->
		<!-- start: CLIP-TWO CSS -->
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/styles.css">
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/styles-new.css">
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/plugins.css">
		<link rel="stylesheet" href="<?= $this->theme->baseUrl ?>/assets/css/themes/theme-2.css"/>
		<!-- end: CLIP-TWO CSS -->
	</head>
	<!-- end: HEAD -->
	<body>
	<?php $this->beginBody() ?>
		<div id="app">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						<!-- start: SEARCH FORM -->
						<div class="search-form">
							<a class="s-open" href="#">
								<i class="ti-search"></i>
							</a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form">
									<i class="ti-close"></i>
								</a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Main Navigation</span>
						</div>
						<ul class="main-navigation-menu">
							<li id="dashboard" class="">
								<a href="/admin-dashboard">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							<li id="manage_accounts" class="">
								<a href="/user/admin">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-settings"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Manage Accounts </span>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
							<img src="<?= $this->theme->baseUrl ?>/assets/images/logo.png" alt="Clip-Two"/>
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<div id="page-title-nav" class="col-md-5"><h1><?= $this->params['pageTitle'] ?></h1></div>
						<ul class="nav navbar-right">
							<!-- start: USER OPTIONS DROPDOWN -->
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?= $this->theme->baseUrl ?>/assets/images/avatar-1.jpg" alt="Peter"> <span class="username"><?= ucfirst(Yii::$app->user->identity->username) ?> <i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-small">
									<li>
										<a href="pages_user_profile.html">
											My Profile
										</a>
									</li>
									<?php if (Yii::$app->user->id): ?>
									<li>
										<a id="logout">
											Logout
										</a>
									</li>
									<?php endif; ?>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<a class="dropdown-off-sidebar" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</a>
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE CONTENT -->
						<?= $content ?>
						<!-- end: PAGE CONTENT -->
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> PASS College</span>. <span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
		</div>
		<?php
		echo  Html::beginForm(['/user/logout'], 'post')
			. Html::submitButton('_',['class' => 'btn btn-link logout hidden'])
			. Html::endForm()
		?>
		<!-- start: MAIN JAVASCRIPTS -->
		<?php $this->endBody() ?>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?= $this->theme->baseUrl ?>/assets/vendor/Chart.js/Chart.min.js"></script>
		<script src="<?= $this->theme->baseUrl ?>/assets/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="<?= $this->theme->baseUrl ?>/assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="<?= $this->theme->baseUrl ?>/assets/js/index.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				// Index.init();
			});

			$('#logout').on('click', function(){
				$('.logout').click();
			});

			$(document).ready(function(){
				$('#<?= $this->params['activeBar'] ?>').addClass('active open');
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php $this->endPage() ?>
