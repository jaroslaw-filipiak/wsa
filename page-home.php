<?php get_header() ?>

<div>
    <!-- Slider main container -->
    <div class="swiper-container 2xl:container 2xl:mx-auto">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
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
        <!-- If we need pagination -->
        <div class="swiper-pagination" style="margin: 30px 0px; position: static"></div>

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
    </div>

    <div class="aloe-products-wrapper">
        <?php echo do_shortcode('[products limit="21" orderby="date" order="DESC" columns="3"]') ?>
    </div>

    <div class="aloe-posts-wrapper">
        <?php 

            // WP_Query arguments
            $args = array(
            	'post_type'              => array( 'post' ),
            	'posts_per_page'         => '3',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
            	while ( $query->have_posts() ) {
            		$query->the_post(); 
                    $post_thumbnail_id     = get_post_thumbnail_id(); // Returns the attachment id
                    $post_thumbnail_srcset = wp_get_attachment_image_srcset( $post_thumbnail_id, 'medium' );
                    $thumbnail = get_the_post_thumbnail_url();
                    
                    ?>

        <figure class="exad-post-grid-thumbnail">
            <a href="<?php echo the_permalink() ?>" class="no-lightbox">
                <img width="768" height="512" src="<?php echo $thumbnail ?>"
                    class="attachment-medium_large size-medium_large wp-post-image" alt="opalanie-aloes-na-oparzenia"
                    loading="lazy" srcset="<?php echo $post_thumbnail_srcset ?>">
                <div class="aloe-post-content">
                    <div class="aloe-post-date">Data: <?php echo get_the_date() ?></div>
                    <h1 class="aloe-post-title"><?php echo get_the_title() ?></h1>
                    <div class="aloe-post-excerpt"><?php echo the_excerpt() ?></div>
                </div>
            </a>

        </figure>

        <?php }
            } else {
            	// no posts found
            }
            
            // Restore original Post Data
            wp_reset_postdata();

        ?>

    </div>


</div>



<?php get_footer() ?>