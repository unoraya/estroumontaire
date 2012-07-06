<?php get_header(); 

      function the_slug() {
	      $post_data = get_post($post->ID, ARRAY_A);
	      $slug = $post_data['post_name'];
	      return $slug; 
      }

?>

<div id="corta">
	<ul id="pagna">
    	<?php get_template_part('/includes/post-types/medpost-ini');?>
        <?php 
	        query_posts('cat=5');
	        while (have_posts()) : the_post(); 
        ?>
        	<?php get_template_part('/includes/post-types/medpost-ini-p');?>
        <?php 
        	endwhile;
        	wp_reset_query(); 
        ?>
        <li class="backtop">
            <img class="cierra-tr" src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="cerrar">

            <form id="buscador" action="<?php echo home_url(); ?>" method="get" class="searchformhead">
                <div class="ausu-suggest">
                    <span class="add-on bb1"></span><input type="text" class="bbc" size="16" placeholder="Escriba aquí lo que desea buscar..." autocomplete="off" id="s" name="s">
                </div>
            </form>
            <div id="twitter-wid">
                <?php get_sidebar(); ?>
            </div>
        </li>
    </ul>
 </div>

<?php get_footer(); ?>