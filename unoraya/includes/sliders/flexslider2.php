<div id="myCarousel2" class="carousel slide">

	<div class="carousel-inner row span9">
			<div class="item active">
	<?php $args = array( 'post_type' => 'asociados', 'posts_per_page' => 100 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		if ( has_post_thumbnail()) {
			//the_title();
			//$large_image_url=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID(), 'large'));


			$featured_id = get_post_thumbnail_id($post->ID);
            $featured_size = 'large';
            $featured_image = wp_get_attachment_image_src( $featured_id, $featured_size);


			?>
			<div class="span2">
			    <a href="<?php the_permalink(); ?>">
			    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $featured_image[0]; ?>&amp;w=170&amp;h=185&zc=0" alt="<?php the_title(); ?>" /></a>
			</div>
			<?php
		}
	endwhile;  wp_reset_query(); ?>
		 	</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

</div>