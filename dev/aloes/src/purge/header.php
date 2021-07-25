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

    <!-- Global site tag (gtag.js) - Google Ads: 377915375 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-377915375"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-377915375');
    </script>
    <!-- Event snippet for Rozpoczęcie realizacji płatności conversion page -->
    <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-377915375/R3dICLLurowCEO-PmrQB'
    });
    </script>
    <!-- Facebook Pixel Code -->
    <script async>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '495961798201209');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=495961798201209&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
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