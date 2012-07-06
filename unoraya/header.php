<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Le styles -->
	<link href="http://rs.unoraya.com/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://rs.unoraya.com/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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

<body <?php body_class(); ?> id="unoraya" >
	
	<div id="barup" class="navbar navbar-fixed-top hidden-desktop">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Unoraya</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="#!quienes-somos">Quienes somos</a></li>
						<li><a href="#!branding">Branding</a></li>
						<li><a href="#!marketing">Marketing</a></li>
						<li><a href="#!audiovisual">Audiovisual</a></li>
						<li><a href="#!industrial">industrial</a></li>
						<li><a href="#!web">Web</a></li>
						<li><a href="#!portafolio">Portafolio</a></li>
						<li><a href="#!contacto">contacto</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<a class="flbc" tecla="-12" undo="0" href="#!quienes-somos" style="height:86px; width:83px;"></a>
                        <a class="flbc" tecla="-10" undo="2" href="#!branding" style="height: 86px; width: 43px; background-position: 167px 0px;"></a>
                        <a class="flbc" tecla="-8" undo="4" href="#!marketing" style="height: 86px; width: 47px; background-position: 124px 0px;"></a>
                        <a class="flbc" tecla="-6" undo="5" href="#!audiovisual" style="height: 86px; width: 50px; background-position: 79px 0px;"></a>
                        <a class="flbc" tecla="-4" undo="6" href="#!industrial" style="height: 55px; width: 72px; background-position: 0 89px;"></a>
                        <a class="flbc" tecla="-2" undo="9" href="#!web" style="height: 55px; width: 45px; background-position: 178px 89px;"></a>
                        <a class="flbc" tecla="0" undo="10" href="#!portafolio" style="height: 73px; width: 50px; background-position: 133px 89px;"></a>
                        <a class="flbc" tecla="1" undo="12" href="#!contacto" style="height: 55px; width: 72px; background-position: 83px 89px;"></a>

