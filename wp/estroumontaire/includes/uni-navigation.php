<?php
/*
if ( function_exists('has_nav_menu') && has_nav_menu('primary-menu') ) {

	wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_class' => 'nav fl', 'menu_id' => 'main-nav' , 'theme_location' => 'primary-menu' ) );

} else {

?>

    <ul id="main-nav" class="nav nav-pills">

<?php if ( is_page() ) $highlight = "page_item"; else $highlight = "page_item current_page_item"; ?>
            <li class="<?php echo $highlight; ?>"><a id="homes" href="<?php echo home_url(); ?>"><?php _e('Inicio','themnific');?></a></li>
            <?php 

        if ( get_option('themnific_custom_nav_menu') == 'true' ) {

            if ( function_exists('themnific_custom_navigation_output') )

                themnific_custom_navigation_output();



        } else { ?>

            

            <?php if ( is_page() ) $highlight = "page_item"; else $highlight = "page_item current_page_item"; ?>



            <?php 

            if (get_option('themnific_cat_menu') == 'true' ) 

                wp_list_categories('sort_column=menu_order&depth=6&title_li=&exclude='.get_option('themnific_nav_exclude')); 

            else

                wp_list_pages('sort_column=menu_order&depth=6&title_li=&exclude='.get_option('themnific_nav_exclude')); 



        }

        ?>

    </ul><!-- /#nav -->

<?php }*/ ?>

<?php 

wp_nav_menu( array('menu' => 'Menu','container' => 'ul','menu_class' => 'nav nav-pills','menu_id' =>'main-nav'  ));

?>

	  