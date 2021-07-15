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

function vite_build() {
	wp_enqueue_style('vitejs_build_styles', get_stylesheet_directory_uri() . '/dev/aloes/dist/index.min.css', array(), null);
}

add_action( 'wp_enqueue_scripts', 'vite_build' );

// Changing excerpt more
function new_excerpt_more($more) {
	global $post;
	return '… <a class="aloe-read-more-btn" href="'. get_permalink($post->ID) . '">' . 'Czytaj dalej &raquo;' . '</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');