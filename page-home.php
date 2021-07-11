<?php get_header() ?>

<div clas="aloe-home 2xl:container 2xl:mx-auto">

    <div class="swiper-container 2xl:container 2xl:mx-auto">

        <div class="swiper-wrapper 2xl:container 2xl:mx-auto">

            <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri() ?>/dev/aloes/src/images/slide-1.jpg" alt="slide-1">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri() ?>/dev/aloes/src/images/slide-2.jpg" alt="slide-2">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_theme_file_uri() ?>/dev/aloes/src/images/slide-3.jpg" alt="slide-3">
            </div>

        </div>

        <div class="swiper-pagination 2xl:container 2xl:mx-auto" style="margin: 30px 0px; position: static"></div>

    </div>

    <div class="aloe-icons-img">
        <img src="<?php echo get_theme_file_uri()?>/dev/aloes/src/images/dostawa-aloes-sklep-wysylka.png" alt="">
    </div>

    <div class="aloe-products-wrapper 2xl:container 2xl:mx-auto">
        <?php echo do_shortcode('[products limit="21" orderby="date" order="DESC" columns="3"]') ?>
    </div>

    <div class="aloe-posts-wrapper 2xl:container 2xl:mx-auto">
        <?php 

            
            $args = array(
            	'post_type'              => array( 'post' ),
            	'posts_per_page'         => '3',
            );
            
            $query = new WP_Query( $args );
               
            if ( $query->have_posts() ) {
            	while ( $query->have_posts() ) {
            		$query->the_post(); 
                    $post_thumbnail_id     = get_post_thumbnail_id(); 
                    $post_thumbnail_srcset = wp_get_attachment_image_srcset( $post_thumbnail_id, 'medium' );
                    $thumbnail = get_the_post_thumbnail_url();
                    
        ?>

        <figure class="exad-post-grid-thumbnail">
            <a href="<?php echo the_permalink() ?>" class="no-lightbox">
                <img width="768" height="512" src="<?php echo $thumbnail ?>"
                    class="attachment-medium_large size-medium_large wp-post-image" alt="" loading="lazy"
                    srcset="<?php echo $post_thumbnail_srcset ?>">
                <div class="aloe-post-content">
                    <div class="aloe-post-date">Data: <?php echo get_the_date() ?></div>
                    <h1 class="aloe-post-title"><?php echo get_the_title() ?></h1>
                    <div class="aloe-post-excerpt"><?php echo the_excerpt() ?></div>
                </div>
            </a>

        </figure>

        <?php }
        
            } else {
                
            }
            
            wp_reset_postdata();

        ?>

    </div>

    <div class="aloe-newsletter-wrapper container mx-auto ">
        <div class="aloe-newsletter-left">
            <h3>My współpracujemy , my nie spamujemy</h3>
            <div class="aloe-newsletter-form">
                <div><?php echo do_shortcode( '[mailerlite_form form_id=1]' ) ?></div>
            </div>
        </div>
        <div class="aloe-newsletter-right">
            <img src="<?php echo get_theme_file_uri() ?>/dev/aloes/src/images/zapraszam.jpg" alt="">
        </div>
    </div>

</div>

<?php get_footer() ?>