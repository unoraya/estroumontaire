<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Le styles -->
	<link href="http://rs.unoraya.com/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://rs.unoraya.com/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/camera.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
	<!-- load main css stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- google webfonts -->
	<?php if (get_option('themnific_dis_goofonts') <> "true") { ?>

	<link href='http://fonts.googleapis.com/css?family=Jockey+One|Quicksand:400,300,700|Terminal+Dosis:400,800,300,600|Sansita+One|Changa+One|Paytone+One|Dorsa|Rochester|Bigshot+One|Open+Sans+Condensed:300|Merienda+One|Six+Caps|Bevan|Oswald|Vidaloka|Droid+Sans|Josefin+Sans|Dancing+Script:400,700|Abel|Rokkitt|Droid+Serif' rel='stylesheet' type='text/css'/>

	<?php } ?>

	<?php wp_head(); ?>
	<?php themnific_head(); ?>
</head>

<body <?php body_class(); ?> id="construmentaire" >
		<header>
		<img id="fondoh" src="<?php echo get_template_directory_uri(); ?>/images/backban.png" alt="fondo-header">
		<div id="bann" class="container">
			<div class="span12"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="logo"></div>
			<div class="span12" style="margin-left:0px;">
				<div id="hero-fine" >
					<img id="tickete" src="<?php echo get_template_directory_uri(); ?>/images/ticket.png" alt="tickete">
					<div class="fluid_container">
				        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
				            <div data-thumb="<?php echo get_template_directory_uri(); ?>/images/slides/thumbs/bridge.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/slides/bridge.png">
	<!-- 			                <div class="camera_caption fadeFromBottom">
				                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
				                </div> -->
				            </div>
				            <div data-thumb="<?php echo get_template_directory_uri(); ?>/images/slides/thumbs/leaf.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/slides/leaf.png">
	<!-- 			                <div class="camera_caption fadeFromBottom">
				                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
				                </div> -->
				            </div>
				        </div><!-- #camera_wrap_1 -->
				    </div><!-- .fluid_container -->
				</div>
			</div>
		</div>
		<div class="container">
			<div id="menubar-fine" class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse">
							<div>
								<ul class="nav">
									<li class="active"><a href="#">HOME</a></li>
									<li><a href="#about">ESTRUMONTAIRE</a></li>
									<li><a href="#contact">PORTAFOLIO DE SERVICIOS</a></li>
									<li><a href="#contact">NOVEDADES</a></li>
									<li><a href="#contact">NUESTROS CLIENTES</a></li>
									<li><a href="#contact">CONTACTO</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		<div class="container">
		<!-- Main hero unit for a primary marketing message or call to action -->
		<!-- Example row of columns -->
			<div class="row">
				<div class="span4 item-up-fine">
					<span id="portafolio-btn"></span>
					<h2 class="titulo-item-up">PORTAFOLIO</h2>
				</div>
				<div class="span4 item-up-fine">
					<span id="servicios-btn"></span>
					<h2 class="titulo-item-up">SERVICIOS</h2>
			   </div>
				<div class="span4 item-up-fine">
					<span id="contacto-btn"></span>
					<h2 class="titulo-item-up">CONTACTO</h2>
				</div>
				<div id="bann2" class="span12">
					<img src="<?php echo get_template_directory_uri(); ?>/images/banner-01.jpg" alt="banner-01">
				</div>
