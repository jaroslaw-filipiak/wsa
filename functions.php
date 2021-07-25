<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), null );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function vite_scripts() {
wp_enqueue_script( 'from-vite', get_theme_file_uri() . '/dev/aloes/dist/index.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'vite_scripts' );



add_image_size( 'hero-slide', 1536, 576 ); 


// quick view
add_filter('ocean_woo_quick_view_button_html','custom_quick_view');
function custom_quick_view($output)
{
 global $product;

 $output  = '<a href="#" id="product_id_' . $product->get_id() . '" 
       class="owp-quick-view" data-product_id="' . $product->get_id() . '"><i 
       class="icon-eye"></i>' . esc_html__( 'Podejrzyj', 'oceanwp' ) . '</a>';  //Edit the $output as you want
 return $output;
}


function filter_plugin_updates( $value ) {
    unset( $value->response['advanced-custom-fields-pro/acf.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );