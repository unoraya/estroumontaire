<?php 

/*-----------------------------------------------------------------------------------*/
/* Custom functions */
/*-----------------------------------------------------------------------------------*/


	global $themnific_options;
	$output = '';

// Add custom styling
add_action('themnific_head','themnific_custom_styling');
function themnific_custom_styling() {
	
	// Get options
	$home = home_url();
	
	$sec_body_color = get_option('themnific_custom_color');
	$thi_body_color = get_option('themnific_thi_body_color');
	$for_body_color = get_option('themnific_for_body_color');
	$body_color = get_option('themnific_body_color');
	$text_color = get_option('themnific_text_color');
	$text_color_alter = get_option('themnific_text_color_alter');
	$body_color_sec = get_option('themnific_body_color_sec');
	$sec_text_color = get_option('themnific_sec_text_color');
	$thi_text_color = get_option('themnific_thi_text_color');
	$link = get_option('themnific_link_color');
	$link_alter = get_option('themnific_link_color_alter');
	$hover = get_option('themnific_link_hover_color');
	$sec_link = get_option('themnific_sec_link_color');
	$sec_hover = get_option('themnific_sec_link_hover_color');
	$thi_hover = get_option('themnific_thi_link_hover_color');
	$body_bg = get_option('themnific_body_bg');
	$body_bg_sec = get_option('themnific_body_bg_sec');
	$shadows = get_option('themnific_shadows_color');
	$shadows_sec = get_option('themnific_shadows_color_sec');
	$shadows_thi = get_option('themnific_shadows_color_thi');
	$border = get_option('themnific_border_color');
	$border_sec = get_option('themnific_border_color_sec');
	    $custom_css = get_option('themnific_custom_css');
		
	// Add CSS to output
		if ($custom_css)
		$output .= $custom_css ;
	
	if ($body_color)
		$output = 'body,ul#serinfo,#serinfo-nav li.current{background-color:'.$body_color.'}' . "\n";
	if ($sec_body_color)
		$output .= '
		.body2
		{background-color:'.$sec_body_color.'}' . "\n";
	if ($thi_body_color)
		$output .= '
		.body3
		{background-color:'.$thi_body_color.'}' . "\n";
	if ($for_body_color)
		$output .= '
		#sliderwarp span#bg,
		#sldback,
		.inpost3
		{background-color:'.$for_body_color.'}' . "\n";
	if ($text_color)
		$output .= 'body {color:'.$text_color.'}' . "\n";	
	if ($sec_text_color)
		$output .= '
		.body2
		{color:'.$sec_text_color.'}' . "\n";
	if ($text_color_alter)
		$output .= '.body3 {color:'.$text_color_alter.' !important}' . "\n";
	if ($link)
		$output .= 'a:link, a:visited,#portfolio-filter a,#serinfo a {color:'.$link.'}' . "\n";
	if ($link_alter)
		$output .= '.body3 a,.thumb-title h2 a {color:'.$link_alter.'}' . "\n";
	if ($hover)
		$output .= 'a:hover,#serinfo a:hover {color:'.$hover.'}' . "\n";
			if ($hover)
		$output .= '.nav a:hover,.nav>li.current_page_item a:hover, .nav>li.current_page_parent a:hover,.nav>a:hover, .nav>li.current_page_item>a, .nav>li.current_page_parent>a {border-bottom-color:'.$hover.' !important}' . "\n";
	if ($sec_link)
		$output .= '
		.body2 a,a.body2 {color:'.$sec_link.'}' . "\n";
	if ($sec_hover)
		$output .= '
		.body2 a:hover,p.body2 a:hover
		{color:'.$sec_hover.'}' . "\n";
	if ($thi_hover)
		$output .= '
		.body3 a:hover,.thumb-title h2 a:hover
		{color:'.$thi_hover.'}' . "\n";
		
		
		

	if ($body_bg)
		$output .= '
		body
		{background-image:url('.$home.'/wp-content/themes/ThemnificPro/images/bg/'.$body_bg.')}' . "\n";
		
	if ($body_bg_sec)
		$output .= '
		.body2
		{background-image:url('.$home.'/wp-content/themes/ThemnificPro/images/bg/'.$body_bg_sec.')}' . "\n";
		
	if ($border)
		$output .= '#sidebar h2,ul#serinfo-nav li,#serinfo,ul.medpost li p,#sidebar .fblock,.searchform input.s {border-color:'.$border.' !important}' . "\n";	

	if ($border_sec)
		$output .= 'ul.bigpost li.alter .bigmeta,ul.bigpost li.alter {border-color:'.$border_sec.' !important}' . "\n";

	if ($shadows)
		$output .= 'body,#portfolio-filter a {text-shadow:0 1px 1px '.$shadows.'}' . "\n";
		
	if ($shadows_sec)
		$output .= '.body2 {text-shadow:0 1px 1px '.$shadows_sec.'}' . "\n";
		
	if ($shadows_thi)
		$output .= '.body3 {text-shadow:0 1px 1px '.$shadows_thi.'}' . "\n";




		// General Typography		
		$font_text = get_option('themnific_font_text');	
		$font_text_sec = get_option('themnific_font_text_sec');	
		
		$font_nav = get_option('themnific_font_nav');
		$font_h1 = get_option('themnific_font_h1');	
		$font_h2 = get_option('themnific_font_h2');	
		$font_h3 = get_option('themnific_font_h3');	
		$font_h4 = get_option('themnific_font_h4');	
		$font_h5 = get_option('themnific_font_h5');	
		$font_h6 = get_option('themnific_font_h5');	
	
	
		if ( $font_text )
			$output .= 'body {font:'.$font_text["style"].' '.$font_text["size"].'px/2.2em '.stripslashes($font_text["face"]).';color:'.$font_text["color"].'}' . "\n";
		if ( $font_text )
			$output .= '.body2,#footer h3 {font:'.$font_text_sec["style"].' '.$font_text_sec["size"].'px/1.5em '.stripslashes($font_text_sec["face"]).';color:'.$font_text_sec["color"].'}' . "\n";
			$output .= ' {font:'.$font_nav["style"].' '.$font_nav["size"].'px/1.5em '.stripslashes($font_nav["face"]).';color:'.$font_nav["color"].'}' . "\n";

		if ( $font_h1 )
			$output .= 'h1 {font:'.$font_h1["style"].' '.$font_h1["size"].'px/1.5em '.stripslashes($font_h1["face"]).';color:'.$font_h1["color"].'}';	
		if ( $font_h2 )
			$output .= 'h2 {font:'.$font_h2["style"].' '.$font_h2["size"].'px/1.5em '.stripslashes($font_h2["face"]).';color:'.$font_h2["color"].'}';	
		if ( $font_h3 )
			$output .= 'h3 {font:'.$font_h3["style"].' '.$font_h3["size"].'px/1.5em '.stripslashes($font_h3["face"]).';color:'.$font_h3["color"].'}';	
		if ( $font_h4 )
			$output .= 'h4 {font:'.$font_h4["style"].' '.$font_h4["size"].'px/1.5em '.stripslashes($font_h4["face"]).';color:'.$font_h4["color"].'}';	
		if ( $font_h5 )
			$output .= 'h5 {font:'.$font_h5["style"].' '.$font_h5["size"].'px/1.5em '.stripslashes($font_h5["face"]).';color:'.$font_h5["color"].'}';	
		if ( $font_h6 )
			$output .= 'h6 {font:'.$font_h6["style"].' '.$font_h6["size"].'px/1.5em '.stripslashes($font_h6["face"]).';color:'.$font_h6["color"].'}' . "\n";	
	
	// Output styles
		if ($output <> '') {
			$output = "<!-- Themnific Styling -->\n<style type=\"text/css\">\n" . $output . "</style>\n";
			echo $output;
	}
		
} 


// Add custom styling
add_action('themnific_head','themnific_mobile_styling');
	// Add stylesheet for shortcodes to HEAD
	function themnific_mobile_styling() {
		echo "<!-- Themnific Mobile CSS -->\n";
		//echo '<link href="'. get_template_directory_uri() . '/styles/mobile.css" rel="stylesheet" type="text/css" />'."\n\n";

} 
?>