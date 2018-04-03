<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

?><!DOCTYPE html>
<html ng-app="barbschwarz" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/manifest.json">
<link rel="mask-icon" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/favicon.ico">
<meta name="msapplication-config" content="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<!-- OpenGraph -->
<meta property="og:title" content="Barb Schwarz">
<meta property="og:site_name" content="Barb Schwarz">
<meta property="og:url" content="http://www.barb-schwarz.com">
<meta property="og:description" content="The Creator of Home Staging®, The ASP®/ASPM® Designations & Courses, Stagedhomes.com®, The Staging University®, The IAHSP® Home Staging Association & Foundation & World Wide Staging Service Week®, WWS">
<meta property="og:type" content="website">
<meta property="og:image" content="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/open-graph.jpg">

<!-- Bootstrap -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet" />
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/et-line-icons/et-line.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/bower_components/hover/css/hover-min.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/css/animate.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/owl-carousel/owl.transitions.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/bower_components/lightbox2/dist/css/lightbox.css" rel="stylesheet">
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/bower_components/flexslider/flexslider.css" rel="stylesheet">
<!--master slider-->
<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/masterslider/style/masterslider.css"/>
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>
<!--cube portfolio-->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">

<!--main css file-->
<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/template/css/one_page.css" rel="stylesheet">

<?php wp_head(); ?>

<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?onload=vcRecaptchaApiLoaded&render=explicit" async defer></script>

<!-- Additional Modules -->
<!-- <script src="https://assets.pinterest.com/js/pinit.js"></script> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="<?php bloginfo("stylesheet_directory"); ?>/assets/template/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="<?php bloginfo("stylesheet_directory"); ?>/assets/template/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?> data-spy="scroll">
<!-- Google Analytics -->
<script src="<?php bloginfo("stylesheet_directory"); ?>/assets/partials/google-analytics.js"></script>

<!-- Pinterest SDK -->
<script>!function(a,b,c){var d,e,f;d="PIN_"+~~((new Date).getTime()/864e5),a[d]?a[d]+=1:(a[d]=1,a.setTimeout(function(){e=b.getElementsByTagName("SCRIPT")[0],f=b.createElement("SCRIPT"),f.type="text/javascript",f.async=!0,f.src=c.mainUrl+"?"+Math.random(),e.parentNode.insertBefore(f,e)},10))}(window,document,{mainUrl:"//assets.pinterest.com/js/pinit_main.js"});</script>

<div id="preloader"></div>

<!-- header -->
<header class="top-header navbar-default navbar <?php if( is_front_page() ) { echo "navbar-fixed-top"; } else { echo "navbar-static-top sticky-header"; } ?> yamm smooth-scroll">
	
	<div class="search-click">
		<div class="container-fluid">
			<form>
				<input type="text" class="form-control" placeholder="Type and hit enter">
				<i class="fa fa-times"></i>
			</form>
		</div>
	</div><!--search bar end-->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php if(is_front_page()) { echo "#welcome"; } else { echo "/"; } ?>">BARB SCHWARZ</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if( is_front_page() ) : ?>
					<li><a href="#welcome">Welcome</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#sayings">Barb's Staging Sayings</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="/blog">Blog</a></li>
				<?php else : ?>
					<li><a href="/blog">Blog Home</a></li>
					<li class="hidden-xs"><div style="margin-top: 9px;"><a href="/" class="btn btn-sm btn-social-icon btn-tumblr"><span class="fa fa-home"></span></a></div></li>
					<li>&nbsp;</li>
				<?php endif; ?>
				
				<li class="hidden-xs"><div style="margin-top: 9px;"><a href="https://www.facebook.com/barbstagedhomes" target="_blank" class="btn btn-sm btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a></div></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
	<!-- header end -->

</header>
<div class="clearfix"></div>