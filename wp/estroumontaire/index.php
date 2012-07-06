<?php get_header(); 

      function the_slug() {
          $post_data = get_post($post->ID, ARRAY_A);
          $slug = $post_data['post_name'];
          return $slug; 
      }

?>


        <?php /*get_template_part('/includes/post-types/medpost-ini');?>
        <?php 
            query_posts('cat=5');
            while (have_posts()) : the_post(); 
        ?>
            <?php get_template_part('/includes/post-types/medpost-ini-p');?>
        <?php 
            endwhile;
            wp_reset_query();*/ 
        ?>

        <div id="contenido-p" class="span12">
            <?php get_template_part('/includes/post-types/medpost-ini');?>  
        </div>

<?php get_footer(); ?>