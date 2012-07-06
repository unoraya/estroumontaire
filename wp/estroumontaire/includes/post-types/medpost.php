<div class="container">
    <div class="hero-unit">
            <div class="span5">
            	<h2><?php the_title(); ?></h2>
                <div style="font-size: 15px;line-height: 22px;text-align: justify;"><?php the_content(); ?></div>
            </div>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
            <?php if($image[0]!=""){ ?>
                <div class="span5">
                    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=200&amp;h=150" alt="<?php the_title(); ?>"/>
                </div>
            <?php } ?>
    </div>
    <footer>
        <p>&copy; Unoraya - info@unoraya.com - Carrera 4 # 4-43 Of. 201B Cali, Colombia - PBX: (572) 325 9855</p>
    </footer>
</div> <!-- /container -->