<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="UTF-8">
<title>1_1_AdBanner_Power_300-250</title>

<meta name="ad.size" content="width=300,height=250">

<script src="https://code.createjs.com/easeljs-0.7.1.min.js"></script>
<script src="https://code.createjs.com/tweenjs-0.5.1.min.js"></script>
<script src="https://code.createjs.com/movieclip-0.7.1.min.js"></script>
<script src="https://code.createjs.com/preloadjs-0.4.1.min.js"></script>
<script src="http://newafricanmagazine.com/wordpress/wp-content/uploads/2016/08/1_1_AdBanner_Power_300-250.js?1467271651273"></script>
<script>
var canvas, stage, exportRoot;
function init() {
	
	canvas = document.getElementById("canvas");
	images = images||{};

	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", handleFileLoad);
	loader.addEventListener("complete", handleComplete);
	loader.loadManifest(lib.properties.manifest);
}

function handleFileLoad(evt) {
	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
}

function handleComplete(evt) {
	exportRoot = new lib._1_1_AdBanner_Power_300250();

	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(lib.properties.fps);
	createjs.Ticker.addEventListener("tick", stage);
}
var clickTag = "http://powerplants.man.eu/"; 

</script>

<style type="text/css">
	#canvas {cursor:pointer; background-color:#ffffff;}
	body {margin:0; padding:0; overflow:hidden; background-color:#ffffff;}
</style>
		<?php $template = get_bloginfo('template_directory'); // store the template path ?>

		<title><?php bloginfo('title'); ?></title>	
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Prevent compatibility mode in IE -->
		<meta name="MobileOptimized" content="320"><!-- Enable correct display in IE mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Enable correct display in iOS/Android -->
	
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/lib/img/meta/favicon.png">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/lib/img/meta/touch.png"> 
		
		<!--[if (lt IE 9) & (!IEMobile)]>
				<link rel="stylesheet" media="screen" href="<?php bloginfo('template_directory'); ?>/style-no-mq.css?v=1.0">
		<![endif]-->
		<!--[if (gte IE 9) | (IEMobile)]><!-->
				<link rel="stylesheet" media="screen" href="<?php bloginfo('stylesheet_url'); ?>?v=1.0">
		<!--<![endif]-->
		
		<script src="<?php bloginfo('template_directory'); ?>/lib/js/lib/modernizr-custom-2.8.1.js"></script>
		<!-- <script data-main="<?php bloginfo('template_directory'); ?>/lib/js/main.min" src="<?php bloginfo('template_directory'); ?>/lib/js/require.js"></script> -->
		<script data-main="<?php bloginfo('template_directory'); ?>/dev/js/main" src="<?php bloginfo('template_directory'); ?>/lib/js/require.js"></script>

		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/pqv8als.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<?php
			wp_deregister_script('jquery'); // Remove packaged jQuery library
			wp_head();
		?>
	</head>
	<?php if ( is_front_page() ) : ?>
	<!--[if IE 8]>         <body onload="init();" <?php body_class('ie8'); ?>> <![endif]-->
	<!--[if gt IE 8]><!--> <body onload="init();" <?php body_class(); ?>> <!--<![endif]-->
	<?php else : ?>
	<!--[if IE 8]>         <body onload="init();" <?php body_class('ie8 inside'); ?>> <![endif]-->
	<!--[if gt IE 8]><!--> <body onload="init();" <?php body_class('inside'); ?>> <!--<![endif]-->
	<?php endif; ?>
	
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N7M6K2"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N7M6K2');</script>
	<!-- End Google Tag Manager -->
		
	<div id="wrapper">