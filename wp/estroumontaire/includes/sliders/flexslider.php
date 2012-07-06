<div id="myCarousel" class="carousel slide">
	<?php 
		$featucat = get_option('themnific_slider1_category');
		$my_query = new WP_Query('showposts=5&orderby=date');	 
		if ($my_query->have_posts()) :
	?>
		<div class="carousel-inner">
				<?php $io=0; ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
					<?php if($io==0){ ?>  
				    	<div class="item active">
						    <a href="<?php the_permalink(); ?>">
						    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
						    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=600&amp;h=150" alt="<?php the_title(); ?>" style="width:98%" /></a>
						    <div class="carousel-caption">
						    	<h2><?php the_title(); ?></h2>
							</div>
				    	</div>
				    <?php }else{ ?>  
				    	<div class="item">
						    <a href="<?php the_permalink(); ?>">
						    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
						    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=600&amp;h=150" alt="<?php the_title(); ?>" style="width:98%" /></a>
						    <div class="carousel-caption">
						    	<h2><?php the_title(); ?></h2>
							</div>
				    	</div>
				    <?php } $io++; ?>  
			 	<?php endwhile; ?>
		</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	<?php endif; wp_reset_query(); ?>

</div>