<?php get_header(); ?>

	<ul id="pagna2">
        <li class="paginauno">
        	<a class="volverini visible-desktop" href="#" title="volver">
		        <img src="<?php echo get_template_directory_uri(); ?>/images/volver.jpg" alt="volver"/>
		    </a>
		    <div id="social" class="visible-desktop">
		        <img src="<?php echo get_template_directory_uri(); ?>/images/iconos.jpg" class="social-btn" data-socialu="<?php echo get_permalink($post->ID); ?>" alt="botones-social-unoraya">
		        <img src="<?php echo get_template_directory_uri(); ?>/images/busca.jpg" class="buscador-btn" alt="buscador-unoraya">
		    </div>
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<div id="contenido-maso">
					<?php
					$args = array(
					    'post_type' => 'attachment',
					    'numberposts' => null,
					    'post_parent' => $post->ID,
					    'post_mime_type' => 'image',
					);
					$attachments = get_posts($args);
					if ($attachments) {
						?>
						
						<?php
					    foreach ($attachments as $attachment) {
					        //Tamaños: "thumbnail", "medium", "large", "full"
					        $image_atts = wp_get_attachment_image_src( $attachment->ID, 'medium' ); 
						?>
						<div class="span3 box" style="text-align:center;">
						<?php
						    	echo do_shortcode('[listpro src="'.get_template_directory_uri().'/js/timthumb.php?src='.
							$image_atts[0].'&amp;w=300" href="#" width="span3" /]');
						?>
						</div>
						<?php
					    }
					    ?>
						
						<?php
					}
					?>
				</div>
			</div>
        </li>
        <li class="backtop">
            <img class="cierra-tr" src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="cerrar">

            <form id="buscador" action="<?php echo home_url(); ?>" method="get" class="searchformhead">
                <div class="ausu-suggest">
                    <span class="add-on bb1"></span><input type="text" class="bbc" size="16" placeholder="Escriba aquí lo que desea buscar..." autocomplete="off" id="s" name="s">
                </div>
            </form>
            <div id="twitter-wid">
                <?php //get_sidebar(); ?>
                <div id="socialall">
                    <div class="shareme" data-text="Unoraya.com Agencia creativa" ></div>
                </div>
            </div>
        </li>
    </ul>
<script type="text/javascript">
	
$container = $('#contenido-maso');
$(".box",$container).css("height","auto");
$(".listprovent",$container).css("height","auto");

</script>
<?php get_footer(); ?>
