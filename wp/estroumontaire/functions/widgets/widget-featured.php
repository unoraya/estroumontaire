<?php
/*---------------------------------------------------------------------------------*/
/* Featured Widget */
/*---------------------------------------------------------------------------------*/
add_action( 'widgets_init', '_featured_widgets' );

/*
 * Register widget.
 */
function _featured_widgets() {
	register_widget( 'Featured_Widget' );
}

/*
 * Widget class.
 */
class featured_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */

	function Featured_Widget() {

		/* Widget settings. */
		$widget_ops = array( 'classname' => 'featured-post-widget', 'description' => __('A widget that displays your featured posts.', '') );

		
		/* Create the widget. */
		$this->WP_Widget( 'featured_widget', __('Themnific Featured Posts', ''), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */

	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$postcount = $instance['postcount'];
                $blogcategory = $instance['blogcategory'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		/* Display Latest Posts */
		 ?>

               

                            <ul class="featured">

                                 <?php
                                    global $paged;
                                    global $post;

                                    $category_id = get_cat_ID( $blogcategory );

                                    $arguments = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'showposts' => $postcount,
                                        'cat' => $category_id,
                                    );

                                    $blog_query = new WP_Query($arguments);

                                    ?>

                                    <?php if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); ?>

                                        <li class="fblock">
                                            <a href="<?php the_permalink(); ?>">
                                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
                                            <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=50&amp;h=50" alt="<?php the_title(); ?>" /></a>
                                            <div class="fblock-inn">
                                            <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
											<p> <small><?php the_time('M j, y') ?> &bull; <?php the_category(', ') ?></small></p>
                                            <p><?php echo pov_excerpt( get_the_excerpt(), '100'); ?></p>
                                            </div>
										</li>

                                 	<?php endwhile; ?>
									<?php endif; ?>

                            </ul>
                

		<?php

                /* After widget (defined by themes). */
		echo $after_widget;
                
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) {
		$title = esc_attr($instance['title']);
		$blogcategory = esc_attr($instance['blogcategory']);

		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', '') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

        <p>
            <label for="<?php echo $this->get_field_id('blogcategory'); ?>"><?php _e('Blog Category:',''); ?></label>
            <?php
			$_categories = array();
			$_categories_obj = get_categories('hide_empty=0');
			foreach ($_categories_obj as $_cat) {
    			$_categories[$_cat->cat_ID] = $_cat->cat_name;}
			$categories_tmp = array_unshift($_categories, "Select a category:");
            ?>
            <select id="<?php echo $this->get_field_id('blogcategory'); ?>" name="<?php echo $this->get_field_name('blogcategory'); ?>">
			<?php
			foreach ($_categories as $_category) {
				if ($blogcategory == $_category) {
					$selected_option = 'selected="selected"';
				} else {
					$selected_option = '';
				} ?>
				<option value="<?php echo $_category; ?>" <?php echo $selected_option; ?>><?php echo $_category; ?></option>
				<?php
			} ?>
			</select>
        </p>

        <p>
			<label for="<?php echo $this->get_field_id( 'postcount' ); ?>"><?php _e('Number of posts', '') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'postcount' ); ?>" name="<?php echo $this->get_field_name( 'postcount' ); ?>" value="<?php echo $instance['postcount']; ?>" />
		</p>

        <?php
	}
	
}
?>