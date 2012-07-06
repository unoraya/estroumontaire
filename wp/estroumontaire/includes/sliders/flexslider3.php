<div id="myCarousel" class="carousel slide span6">
	<?php 
$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' =>'image') );

		//if ($my_query->have_posts()) :
	?>
		<div class="carousel-inner">
				<?php $io=0; ?>
				<?php foreach ( $attachments as $attachment_id => $attachment ){ ?>	
					<?php if($io==0){ ?>  
				    	<div class="item active">
						    <a href="<?php the_permalink(); ?>">
						    <?php $image = wp_get_attachment_image_src($attachment_id, 'folio-image'); ?>
						    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=600" alt="<?php the_title(); ?>" style="width:98%" /></a>
						    <div class="carousel-caption">
						    	<h2><?php echo get_post_meta($attachment_id,'_wp_attachment_image_alt', true); ?></h2>
							</div>
				    	</div>
				    <?php }else{ ?>  
				    	<div class="item">
						    <a href="<?php the_permalink(); ?>">
						    <?php $image = wp_get_attachment_image_src($attachment_id, 'folio-image'); ?>
						    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=600" alt="<?php the_title(); ?>" style="width:98%" /></a>
						    <div class="carousel-caption">
						    	<h2><?php ?></h2>
							</div>
				    	</div>
				    <?php } $io++; ?>  
			 	<?php } ?>
		</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	<?php //endif; ?>

</div>