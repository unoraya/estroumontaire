<li id="<?php echo the_slug(); ?>" class="paginauno" >
    <a class="volverini visible-desktop" href="#" title="volver">
        <img src="<?php echo get_template_directory_uri(); ?>/images/volver.png" alt="volver"/>
    </a>
    <div id="social" class="visible-desktop">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iconos.jpg" class="social-btn" data-socialu="<?php echo get_permalink($post->ID); ?>" alt="botones-social-unoraya">
        <img src="<?php echo get_template_directory_uri(); ?>/images/busca.jpg" class="buscador-btn" alt="buscador-unoraya">
    </div>
    <div class="container">
        <div class="hero-unit">
                <div class="span5">
                    <h2><?php the_title(); ?></h2>
                    <div style="font-size: 15px;line-height: 22px;text-align: justify;"><?php the_content(); ?></div>
                </div>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
                <?php if($image[0]!=""){ ?>
                    <div class="span5">
                        <img class="bags" src="" data-src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                    </div>
                <?php } ?>
        </div>
        <footer>
            <p>&copy; Unoraya - info@unoraya.com - Carrera 4 # 4-43 Of. 201B Cali, Colombia - PBX: (572) 325 9855</p>
        </footer>
    </div> <!-- /container -->
</li>