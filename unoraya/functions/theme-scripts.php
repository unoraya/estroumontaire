<?php
if ( ! is_admin() ) { add_action( 'wp_print_scripts', 'themnific_add_javascript' ); }
if ( ! function_exists( 'themnific_add_javascript' ) ) {
	function themnific_add_javascript() {
		// Load Common scripts	
		//wp_enqueue_script('jquery-1.6.1.min', get_stylesheet_directory_uri() .'/js/jquery-1.6.1.min.js');
		//wp_enqueue_script( 'superfish', get_template_directory_uri().'/js/superfish.js');
		//wp_enqueue_script( 'jquery.hoverIntent.minified', get_template_directory_uri().'/js/jquery.hoverIntent.minified.js');
		//wp_enqueue_script( 'css3-mediaqueries', get_template_directory_uri().'/js/css3-mediaqueries.js');
		//wp_enqueue_script('ownScript', get_stylesheet_directory_uri() .'/js/ownScript.js','','', true);
		// // Load Slider scripts		
		// if (get_option('themnific_slider_dis') <> "true") { 
		// 	if ( is_page_template('template-blog.php') || is_home()) { 
		// 		wp_enqueue_script('jquery.flexslider-min', get_stylesheet_directory_uri() .'/js/jquery.flexslider-min.js');
		// 		wp_enqueue_script('slider.start', get_stylesheet_directory_uri() .'/js/slider.start.js');
		// 	} 
		// }
		// // Tabs script		
		 if (get_option('themnific_dis_tabs') <> "true") {  
		 		//wp_enqueue_script('tabs', get_stylesheet_directory_uri() .'/js/tabs.js');
		 }

wp_deregister_script('jquery');
wp_deregister_script('jquery-ui-core');
wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
wp_enqueue_script('jquery');

wp_enqueue_script('bootstrap','http://rs.unoraya.com/bootstrap/js/bootstrap.min.js');
wp_enqueue_script('sharrre',get_template_directory_uri().'/js/sharrre.js');
wp_enqueue_script('twitter','http://widgets.twimg.com/j/2/widget.js');
wp_enqueue_script('easi',get_template_directory_uri().'/js/easi.js');

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	}
}

?>