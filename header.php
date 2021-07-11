<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <?php
	
	if(is_front_page() || is_home( ) || is_page('home')) { ?>


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <?php } ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

    <?php wp_body_open(); ?>

    <?php do_action( 'ocean_before_outer_wrap' ); ?>

    <div id="outer-wrap" class="site clr">

        <a class="skip-link screen-reader-text"
            href="#main"><?php oceanwp_theme_strings( 'owp-string-header-skip-link', 'oceanwp' ); ?></a>

        <?php do_action( 'ocean_before_wrap' ); ?>

        <div id="wrap" class="clr">

            <?php do_action( 'ocean_top_bar' ); ?>

            <?php do_action( 'ocean_header' ); ?>

            <?php do_action( 'ocean_before_main' ); ?>

            <main id="main" class="site-main clr" <?php oceanwp_schema_markup( 'main' ); ?> role="main">

                <?php do_action( 'ocean_page_header' ); ?>