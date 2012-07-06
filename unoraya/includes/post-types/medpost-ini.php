<li class="paginauno">
    <div id="social" class="visible-desktop">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iconos.jpg" class="social-btn" data-socialu="http://unoraya.com/" alt="botones-social-unoraya">
        <img src="<?php echo get_template_directory_uri(); ?>/images/busca.jpg" class="buscador-btn" alt="buscador-unoraya">
    </div>
    <div class="container">
        <div style="text-align:center;">
            <img style="margin:auto;" class="hidden-desktop" src="<?php echo get_template_directory_uri(); ?>/images/indice.png" alt="logo-unoraya">
        </div>
        <div id="logocent" class="visible-desktop" >
            <div id="logo" class="row"> 
                <div id="contlog">
                    <div id="cualog2">
                        <div class="flbc" style="height:86px; width:83px;">
                            <div class="flecha" style="height: 89px; background-position: -26px -86px; top: -49px; width: 321px; right:0px;"></div>
                        </div>
                        <div class="flbc" style="height: 86px; width: 43px; background-position: 167px 0px;">
                            <div class="flecha" style="left: 0px; background-position: -341px -11px; height: 139px; top: -109px; width: 259px;"></div>
                        </div>
                        <div class="flbc" style="height: 86px; width: 47px; background-position: 124px 0px;">
                            <div class="flecha" style="left: 39px; background-position: -610px -81px; height: 99px; top: -62px; width: 340px;"></div>
                        </div>
                        <div class="flbc" style="height: 86px; width: 50px; background-position: 79px 0px;">
                            <div class="flecha" style="left: 18px; background-position: -407px -215px; height: 50px; width: 342px; top: 33px;"></div>
                        </div>
                        <div class="flbc" style="height: 55px; width: 72px; background-position: 0 89px;">
                            <div class="flecha" style="height: 89px; background-position: -10px -209px; width: 291px; top: 0px; right: 30px;"></div>
                        </div>
                        <div class="flbc" style="height: 55px; width: 45px; background-position: 178px 89px;">
                            <div class="flecha" style="top: 45px; width: 136px; background-position: -68px -401px; height: 119px; right: 21px;"></div>
                        </div>
                        <div class="flbc" style="height: 73px; width: 50px; background-position: 133px 89px;">
                            <div class="flecha" style="top: 50px; height: 119px; background-position: -338px -376px; left: 30px; width: 306px;"></div>
                        </div>
                        <div class="flbc" style="height: 55px; width: 72px; background-position: 83px 89px;">
                            <div class="flecha" style="top: 45px; width: 330px; height: 48px; left: 20px; background-position: -390px -312px;"></div>
                        </div>
                    </div>

                    <div id="cualog">
                        <a class="flbc" tecla="-12" undo="0" href="#!quienes-somos" style="height:86px; width:83px;"></a>
                        <a class="flbc" tecla="-10" undo="2" href="#!branding" style="height: 86px; width: 43px; background-position: 167px 0px;"></a>
                        <a class="flbc" tecla="-8" undo="4" href="#!marketing" style="height: 86px; width: 47px; background-position: 124px 0px;"></a>
                        <a class="flbc" tecla="-6" undo="5" href="#!audiovisual" style="height: 86px; width: 50px; background-position: 79px 0px;"></a>
                        <a class="flbc" tecla="-4" undo="6" href="#!industrial" style="height: 55px; width: 72px; background-position: 0 89px;"></a>
                        <a class="flbc" tecla="-2" undo="9" href="#!web" style="height: 55px; width: 45px; background-position: 178px 89px;"></a>
                        <a class="flbc" tecla="0" undo="10" href="#!portafolio" style="height: 73px; width: 50px; background-position: 133px 89px;"></a>
                        <a class="flbc" tecla="1" undo="12" href="#!contacto" style="height: 55px; width: 72px; background-position: 83px 89px;"></a>
                    </div>
                </div>  
            </div>
        </div>
        <footer>
            <p>&copy; Unoraya - info@unoraya.com - Carrera 4 # 4-43 Of. 201B Cali, Colombia - PBX: (572) 325 9855</p>
        </footer>
    </div> <!-- /container -->
</li>
<li id="portafolio" class="paginauno">
    <a class="volverini visible-desktop" href="#" title="volver">
        <img src="<?php echo get_template_directory_uri(); ?>/images/volver.png" alt="volver"/>
    </a>
    <div id="social" class="visible-desktop">
        <img src="<?php echo get_template_directory_uri(); ?>/images/iconos.jpg" class="social-btn" data-socialu="http://unoraya.com/portafolio" alt="botones-social-unoraya">
        <img src="<?php echo get_template_directory_uri(); ?>/images/busca.jpg" class="buscador-btn" alt="buscador-unoraya">
    </div>
    <div class="container">
        <div >
            <h2>PORTAFOLIO</h2>
                <div id="contenido-maso">
                    <?php query_posts('cat=3&posts_per_page=200'); ?>
                    <?php
                        if (have_posts()) : while ( have_posts() ) : the_post();
                            $imaid_fine=get_post_thumbnail_id($post->ID);
                            $image = wp_get_attachment_image_src($imaid_fine, 'folio-image');

                                                        $width = $image[1];
                                                        $height = $image[2];
                                                        $height2=((270*$height)/$width)+4;

                        echo do_shortcode('[listpro2 tiutlo="'.get_the_title().'" src="'.get_template_directory_uri().'/js/timthumb.php?src='.$image[0].'&amp;w=270" href="'.get_permalink($post->ID).'" width="span3 box" class="span3" height="'.$height2.'" /]');
                        endwhile;

                        else: endif;
                        wp_reset_query(); 
                    ?>
                </div>
        </div>
        <footer>
            <p>&copy; Unoraya - info@unoraya.com - Carrera 4 # 4-43 Of. 201B Cali, Colombia - PBX: (572) 325 9855</p>
        </footer>
    </div> <!-- /container -->
</li>
