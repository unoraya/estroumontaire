<?php
/*
 * Copyright 2010 Matt Wiebe.
 *
 * This code is licensed under the GPL v2.0
 * http://www.opensource.org/licenses/gpl-2.0.php
 *
 * If you do something cool with it, let me know! http://somadesign.ca/contact/
 *
 * Version 1.3
 *
 * === Changelog ===
 *
 * 1.0
 *  - Initial release
 * 1.1
 *  - Added feed support in URL rewrites
 * 1.2
 *  - Removed redundant post_class code.
 *  - Removed redundant single post_type template code
 *  - Introduced directory support for template files
 * 1.3
 *  - Use the newer, more robust labels array to set defaults
 *  - Add possible support for adding post_type to nav_menus. Commented out by default since the 'show_in_nav_menus' $arg should provide for that, although it doesn't seem to work right now.
 *
 */
 
/**
 * SD_Register_Post_Type class
 *
 * @author Matt Wiebe
 * @link http://somadesign.ca
 *
 * @param string $post_type The post type to register
 * @param array $args The arguments to pass into @link register_post_type(). Some defaults provided to ensure the UI is available.
 * @param string $custom_plural The plural name to be used in rewriting (http://yourdomain.com/custom_plural/ ). If left off, an "s" will be appended to your post type, which will break some words. (person, box, ox. Oh, English.)
 **/
 


add_action("admin_init", "admin_init");
add_action('save_post', 'guardar_precio');
add_action('save_post', 'guardar_fabricante');
 
function admin_init(){
  add_meta_box("prodInfo-meta", "Opciones Producto", "meta_options", "Producto", "normal", "low");
}
function meta_options(){
  global $post;
  $custom = get_post_custom($post->ID);
  $precio = $custom["precio"][0];
  $fabricante = $custom["fabricante"][0];
?>
  <label>Precio:</label><input name="precio" value="<?php echo $precio; ?>" /><br /><br />
  <label>Fabricante:</label><input name="fabricante" value="<?php echo $fabricante; ?>" />
<?php
}
 
function guardar_precio(){
  global $post;
  update_post_meta($post->ID, "precio", $_POST["precio"]);
}
function guardar_fabricante(){
  global $post;
  update_post_meta($post->ID, "fabricante", $_POST["fabricante"]);
}

register_taxonomy("plataforma", array("Producto"), array("hierarchical" => true, "label" => "Plataforma", "singular_label" => "Plataforma", "rewrite" => true));


add_filter("manage_edit-Producto_columns", "prod_edit_columns");
add_action("manage_posts_custom_column",  "prod_custom_columns");
 
function prod_edit_columns($columns){
   $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Nombre del Producto",
      "descripcion" => "Descripción",
      "precio" => "Precio",
      "plataforma" => "Plataforma",
      "fabricante" => "Fabricante",
);
 
return $columns;
}
 
function prod_custom_columns($column){
    global $post;
    switch ($column)
       {
	case "descripcion":
	   the_excerpt();
	   break;
	case "precio":
	   $custom = get_post_custom();
	   echo $custom["precio"][0];
	   break;
        case "fabricante":
	   $custom = get_post_custom();
	   echo $custom["fabricante"][0];
	   break;
	case "plataforma":
	   echo get_the_term_list($post->ID, 'plataforma', '', ', ','');
	   break;
	}
}




if ( ! class_exists('SD_Register_Post_Type') ) {
 
	class SD_Register_Post_Type {
 
		private $post_type;
		private $post_slug;
		private $args;
		private $post_type_object;
 
		private $defaults = array(
			'show_ui' => true,
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail')
		);
 
		private function set_defaults() {
			$plural = ucwords( $this->post_slug );
			$post_type = ucwords( $this->post_type );
 
			$this->defaults['labels'] = array(
				'name' => $plural,
				'singular_name' => $post_type,
				'add_new_item' => 'Add New ' . $post_type,
				'edit_item' => 'Edit ' . $post_type,
				'new_item' => 'New ' . $post_type,
				'view_item' => 'View ' . $post_type,
				'search_items' => 'Search ' . $plural,
				'not_found' => 'No ' . $plural . ' found',
				'not_found_in_trash' => 'No ' . $plural . ' found in Trash'
			);
		}
 
		public function __construct( $post_type = null, $args = array(), $custom_plural = false ) {
			if ( ! $post_type ) {
				return;
			}
 
			// meat n potatoes
			$this->post_type = $post_type;
			$this->post_slug = ( $custom_plural ) ? $custom_plural : $post_type . 's';
 
			// a few extra defaults. Mostly for labels. Overridden if proper $args present.
			$this->set_defaults();
			// sort out those $args
			$this->args = wp_parse_args($args, $this->defaults);
 
			// magic man
			$this->add_actions();
			$this->add_filters();
 
		}
 
		public function add_actions() {
			add_action( 'init', array($this, 'register_post_type') );
			add_action( 'template_redirect', array($this, 'context_fixer') );
		}
 
		public function add_filters() {
			add_filter( 'generate_rewrite_rules', array($this, 'add_rewrite_rules') );
			add_filter( 'template_include', array($this, 'template_include') );
			add_filter( 'body_class', array($this, 'body_classes') );
		}
 
		public function context_fixer() {
			if ( get_query_var( 'post_type' ) == $this->post_type ) {
				global $wp_query;
				$wp_query->is_home = false;
			}
		}
 
		public function add_rewrite_rules( $wp_rewrite ) {
			$new_rules = array();
			$new_rules[$this->post_slug . '/page/?([0-9]{1,})/?$'] = 'index.php?post_type=' . $this->post_type . '&paged=' . $wp_rewrite->preg_index(1);
			$new_rules[$this->post_slug . '/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?post_type=' . $this->post_type . '&feed=' . $wp_rewrite->preg_index(1);
			$new_rules[$this->post_slug . '/?$'] = 'index.php?post_type=' . $this->post_type;
 
			$wp_rewrite->rules = array_merge($new_rules, $wp_rewrite->rules);
			return $wp_rewrite;
		}
 
		public function register_post_type() {
			register_post_type( $this->post_type, $this->args );
		}
 
		public function template_include( $template ) {
			if ( get_query_var('post_type') == $this->post_type ) {
 
				if ( is_single() ) {
					if ( $single = locate_template( array( $this->post_type.'/single.php') ) )
						return $single;
				}
				else { // loop
					return locate_template( array(
						$this->post_type . '/index.php',
						$this->post_type . '.php',
						'index.php'
					));
				}
 
			}
			return $template;
		}
 
		public function body_classes( $c ) {
			if ( get_query_var('post_type') === $this->post_type ) {
				$c[] = $this->post_type;
				$c[] = 'type-' . $this->post_type;
			}
			return $c;
		}
 
 
	} // end SD_Register_Post_Type class
 
	/**
	 * A helper function for the SD_Register_Post_Type class. Because typing "new" is hard.
	 *
	 * @author Matt Wiebe
	 * @link http://somadesign.ca
	 *
	 * @uses SD_Register_Post_Type class
	 * @param string $post_type The post type to register
	 * @param array $args The arguments to pass into @link register_post_type(). Some defaults provided to ensure the UI is available.
	 * @param string $custom_plural The plural name to be used in rewriting (http://yourdomain.com/custom_plural/ ). If left off, an "s" will be appended to your post type, which will break some words. (person, box, ox. Oh, English.)
	 **/
 
	if ( ! function_exists( 'sd_register_post_type' ) && class_exists( 'SD_Register_Post_Type' ) ) {
		function sd_register_post_type( $post_type = null, $args=array(), $custom_plural = false ) {
			$custom_post = new SD_Register_Post_Type( $post_type, $args, $custom_plural );
		}
	}
}
 
sd_register_post_type( 'Producto' );

register_taxonomy("plataforma", array("Producto"), array("hierarchical" => true, "label" => "Plataforma", "singular_label" => "Plataforma", "rewrite" => true));


?>