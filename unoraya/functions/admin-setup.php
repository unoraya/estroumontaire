<?php

define('THEME_FRAMEWORK','themnificthemes');

/*-----------------------------------------------------------------------------------*/
/* Add default options and show Options Panel after activate  */
/*-----------------------------------------------------------------------------------*/
$pagenow = '';
if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {

	//Call action that sets
	add_action('admin_head','themnific_option_setup');
	
	//Do redirect
	header( 'Location: '.admin_url().'admin.php?page=themnificthemes' ) ;
	
}

function themnific_option_setup(){

	//Update EMPTY options
	$themnific_array = array();
	add_option('themnific_options',$themnific_array);

	$template = get_option('themnific_template');
	$saved_options = get_option('themnific_options');
	
	foreach($template as $option) {
		if($option['type'] != 'heading'){
			$id = $option['id'];
			$std = $option['std'];
			$db_option = get_option($id);
			if(empty($db_option)){
				if(is_array($option['type'])) {
					foreach($option['type'] as $child){
						$c_id = $child['id'];
						$c_std = $child['std'];
						update_option($c_id,$c_std);
						$themnific_array[$c_id] = $c_std; 
					}
				} else {
					update_option($id,$std);
					$themnific_array[$id] = $std;
				}
			}
			else { //So just store the old values over again.
				$themnific_array[$id] = $db_option;
			}
		}
	}
	update_option('themnific_options',$themnific_array);
}

/*-----------------------------------------------------------------------------------*/
/* Admin Backend */
/*-----------------------------------------------------------------------------------*/
function themnificthemes_admin_head() { 
	
	//Tweaked the message on theme activate
	?>
    <script type="text/javascript">
    jQuery(function(){
    	
        var message = '<p>This <strong>Themnific</strong> comes with a <a href="<?php echo admin_url('admin.php?page=themnificthemes'); ?>">comprehensive options panel</a>. This theme also supports widgets, please visit the <a href="<?php echo admin_url('widgets.php'); ?>">widgets settings page</a> to configure them.</p>';
    	jQuery('.themes-php #message2').html(message);
    
    });
    </script>
    <?php
    
    //Setup Custom Navigation Menu
	if (function_exists('themnific_custom_navigation_setup')) {
		themnific_custom_navigation_setup();
	}
	
}

add_action('admin_head', 'themnificthemes_admin_head'); 




?>