<?php
/*---------------------------------------------------------------------------------*/
/* Ads Widget */
/*---------------------------------------------------------------------------------*/

class AdFixWidget extends WP_Widget {

	function AdFixWidget() {
		$widget_ops = array('description' => 'Use this widget after 125px ads' );
		parent::WP_Widget(false, __('Themnific - Ads - Fix Widget', ''),$widget_ops);      
	}

	function widget($args, $instance) {  

        echo '<div class="ad125_fix">';

		echo '</div>';

	}

} 

register_widget('AdFixWidget');
?>