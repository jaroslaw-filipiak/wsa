<?php get_header() ?>

<div class="2xl:container 2xl:mx-auto border-8 border-pink-600 xl:border-purple-300 2xl:border-green-500">
    <!-- Slider main container -->
    <div class="swiper-container">
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

    <ul class="products">
        <?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
    </ul>
    <!– /.products–>
</div>



<?php get_footer() ?>