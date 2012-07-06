<?php get_header(); ?>

<div id="core" class="container">
	<div class="row">
        <div class="span9">
		<?php if (have_posts()) : ?>
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 >Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 >Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 >Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 >Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 >Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 >Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 >Blog Archives</h2>
 	  <?php } ?>
              <ul class="medpost">
				<?php while (have_posts()) : the_post(); ?>
                           <li><?php get_template_part('/includes/post-types/medpost');?></li>
                <?php endwhile; ?><!-- end post -->
                </ul><!-- end latest posts section-->
<div style="clear: both;"></div>
			<ul class="navigation">
			<li class="fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older Items' ) ); ?></li>
			<li class="fr"><?php previous_posts_link( __( 'Newer Items <span class="meta-nav">&rarr;</span>' ) ); ?></li>
			</ul><!-- end navigation -->
		<?php else : ?>
                <div class="post">
                <h2>Not Found!</h2>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php get_search_form(); ?>
                    <?php wp_tag_cloud('smallest=8&largest=36&'); ?>
                    </div>
		<?php endif; ?>
        </div><!-- end #core .eightcol-->
        <div class="span3">
        		<?php get_sidebar(); ?>
        </div>
	</div><!--end #core .row-->
   <div style="clear: both;"></div>
</div><!--end #core-->
<?php get_footer(); ?>

