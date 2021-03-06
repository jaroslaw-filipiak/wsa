<?php get_header() ;



?>



<div clas="aloe-home container mx-auto" style="width: 100%;">

    <div class="swiper-container mx-auto" style="width: 100%;">

        <div class="swiper-wrapper mx-auto" style="width: 100%;">

            <?php
			// check if the repeater field has rows of data
			if( have_rows('slajdy') ):
			// loop through the rows of data
			while ( have_rows('slajdy') ) : the_row();  ?>

            <?php $link = get_sub_field('link');  ?>

            <div class="swiper-slide aloe-slide">
                <a target="_blank" href="<?php echo $link ?>"></a>
                <?php
			        $image = get_sub_field('slajd', false);
			        $size = 'hero-slide'; // (thumbnail, medium, large, full or custom size 1536-576 hero-slide)
			        if( $image ) {
			        echo wp_get_attachment_image( $image, $size );}
			        ?>
            </div>


            <?php endwhile;
			else :
			// no rows found
			endif;?>


        </div>

        <div class="swiper-pagination container mx-auto" style="margin: 30px auto; position: static"></div>

    </div>

    <div class="aloe-icons">

        <div class="aloe-icon">

            <div class="aloe-icon--left">
                <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 447.907 447.907"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <link type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style lang="en" type="text/css" id="dark-mode-native-style" />
                        <g>
                            <g>
                                <path
                                    d="M432.703,206.904l-30.5-13.2l-25.9-50.4c-7-13.8-21.2-22.4-36.7-22.3h-44.6v-12.6c0-22.8-18.2-41.4-41-41.4h-213.2    c-22.8,0-40.8,18.7-40.8,41.4v193c-0.2,13.9,10.9,25.3,24.8,25.5c0.1,0,0.2,0,0.4,0h5.3c0,1-0.1,1.4-0.1,2    c-0.1,28.6,23,51.9,51.6,52c28.6,0.1,51.9-23,52-51.6c0-0.2,0-0.3,0-0.5c0-0.7,0-1-0.1-2h172.3c0,1,0,1.4,0,2    c-0.1,28.6,23,51.9,51.6,52c28.6,0.1,51.9-23,52-51.6c0-0.2,0-0.3,0-0.5c0-0.7,0-1,0-2h12.9c13.9,0,25.2-11.3,25.2-25.2    c0-0.1,0-0.2,0-0.4v-71C448.103,220.304,442.103,211.004,432.703,206.904z M82.303,361.004c-17.6,0-31.8-14.2-31.8-31.8    c0-17.6,14.2-31.8,31.8-31.8s31.8,14.2,31.8,31.8C114.103,346.704,99.803,361.004,82.303,361.004z M275.003,307.104h-145.8    c-8.4-18.3-26.8-30-46.9-29.9c-20.2-0.1-38.5,11.5-46.9,29.9h-10.2c-3.1,0-5.2-2.4-5.2-5.5v-51.5h255V307.104z M275.003,108.504    v121.6h-255v-121.6c0-11.7,9.1-21.4,20.8-21.4h213.2c11.7,0.1,21.1,9.7,21,21.3V108.504z M295.003,141.104h44.6    c7.9-0.1,15.3,4.2,19,11.3l20,38.7h-83.6V141.104z M358.103,361.004c-17.6,0-31.8-14.2-31.8-31.8c0-17.6,14.2-31.8,31.8-31.8    s31.8,14.2,31.8,31.8C389.903,346.704,375.703,361.004,358.103,361.004z M428.003,301.604c0,3.1-2.1,5.5-5.2,5.5h-17.8    c-12.1-25.9-42.9-37.1-68.8-25c-11,5.1-19.9,14-25,25h-16.2v-96h98l31.8,14c2,1,3.3,3.2,3.2,5.4V301.604z"
                                    fill="#42bd98" data-original="#000000" style="" class="" />
                            </g>
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                        </g>
                    </g>
                </svg>

            </div>
            <div class="aloe-icon--right">
                <h2>Szybka dostawa</h2>
                <h3>Wysy??amy nawet tego samego dnia</h3>
            </div>

        </div>
        <div class="aloe-icon">

            <div class="aloe-icon--left">

                <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <link type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style lang="en" type="text/css" id="dark-mode-native-style" />
                        <g>
                            <path
                                d="m1.183 350.719c1.74 3.251 5.129 5.281 8.817 5.281h50v146c0 5.522 4.477 10 10 10h372c5.523 0 10-4.478 10-10v-146h50c3.688 0 7.077-2.03 8.817-5.281 1.74-3.252 1.549-7.197-.497-10.266l-60-90c-1.854-2.782-4.977-4.453-8.32-4.453h-38c-5.523 0-10 4.477-10 10s4.477 10 10 10h32.648l46.667 70h-161.963l-46.667-70h39.315c5.523 0 10-4.477 10-10s-4.477-10-10-10c-11.42 0-232.948 0-244 0-3.344 0-6.466 1.671-8.32 4.453l-60 90c-2.046 3.069-2.237 7.014-.497 10.266zm78.817 5.281h116c3.344 0 6.466-1.671 8.32-4.453l41.68-62.52v202.973h-166zm227.68-4.453c1.854 2.782 4.977 4.453 8.32 4.453h116v136h-166v-202.973zm-232.328-85.547h161.963l-46.667 70h-161.963z"
                                fill="#42bd98" data-original="#000000" style="" class="" />
                            <path
                                d="m196 25.03c-8.168-12.004-22.269-25.03-45-25.03-32.045 0-55 25.825-55 56.97 0 34.579 27.985 57.29 70.347 91.666 7.423 6.023 15.098 12.252 23.252 19.046 1.854 1.545 4.127 2.317 6.401 2.317s4.547-.772 6.401-2.317c8.154-6.794 15.829-13.023 23.252-19.046 42.362-34.376 70.347-57.087 70.347-91.666 0-31.17-22.979-56.97-55-56.97-22.731 0-36.831 13.026-45 25.03zm80 31.94c0 25.052-25.042 45.375-62.949 76.136-5.509 4.47-11.156 9.053-17.051 13.909-5.895-4.855-11.542-9.438-17.051-13.909-37.906-30.761-62.949-51.083-62.949-76.136 0-21.076 15.047-36.97 35-36.97 26.107 0 35.034 29.068 35.391 30.268 1.233 4.283 5.152 7.232 9.609 7.232s8.376-2.95 9.609-7.232c.088-.303 9.022-30.268 35.391-30.268 19.953 0 35 15.894 35 36.97z"
                                fill="#42bd98" data-original="#000000" style="" class="" />
                            <path
                                d="m376 200c2.351 0 4.701-.825 6.586-2.475 5.432-4.754 10.552-9.117 15.502-13.336 27.815-23.705 47.912-40.831 47.912-66.309 0-24.045-17.57-42.88-40-42.88-14.274 0-23.844 7.259-30 15.034-6.156-7.775-15.725-15.034-30-15.034-22.43 0-40 18.835-40 42.88 0 25.478 20.097 42.604 47.912 66.309 4.951 4.219 10.07 8.582 15.502 13.336 1.885 1.65 4.236 2.475 6.586 2.475zm-50-82.12c0-11.092 7.009-22.88 20-22.88 14.74 0 20.121 18.078 20.369 18.94 1.206 4.32 5.136 7.335 9.624 7.335 4.504 0 8.445-2.985 9.637-7.329.221-.773 5.591-18.946 20.37-18.946 12.991 0 20 11.788 20 22.88 0 16.244-15.389 29.359-40.884 51.086-2.965 2.527-5.991 5.105-9.116 7.795-3.125-2.69-6.15-5.268-9.116-7.795-25.495-21.727-40.884-34.842-40.884-51.086z"
                                fill="#42bd98" data-original="#000000" style="" class="" />
                            <circle cx="359" cy="256" r="10" fill="#42bd98" data-original="#000000" style="" class="" />
                        </g>
                    </g>
                </svg>

            </div>
            <div class="aloe-icon--right">
                <h2>Darmowa wysy??ka</h2>
                <h3>Przy zam??wieniu powy??ej 160 z??</h3>
            </div>

        </div>
        <div class="aloe-icon">

            <div class="aloe-icon--left">
                <svg version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 412.735 412.735"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <link type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style lang="en" type="text/css" id="dark-mode-native-style" />
                        <g>
                            <g>
                                <path
                                    d="M295.706,35.522C295.706,35.522,295.706,35.522,295.706,35.522c-34.43-0.184-67.161,14.937-89.339,41.273    c-22.039-26.516-54.861-41.68-89.339-41.273C52.395,35.522,0,87.917,0,152.55C0,263.31,193.306,371.456,201.143,375.636    c3.162,2.113,7.286,2.113,10.449,0c7.837-4.18,201.143-110.759,201.143-223.086C412.735,87.917,360.339,35.522,295.706,35.522z     M206.367,354.738C176.065,336.975,20.898,242.412,20.898,152.55c0-53.091,43.039-96.131,96.131-96.131    c32.512-0.427,62.938,15.972,80.457,43.363c3.557,4.905,10.418,5.998,15.323,2.44c0.937-0.68,1.761-1.503,2.44-2.44    c29.055-44.435,88.631-56.903,133.066-27.848c27.202,17.787,43.575,48.114,43.521,80.615    C391.837,243.456,236.669,337.497,206.367,354.738z"
                                    fill="#42bd98" data-original="#000000" style="" class="" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </g>
                </svg>


            </div>
            <div class="aloe-icon--right">
                <h2>100% zdrowia</h2>
                <h3>Sprawdzone produkty</h3>
            </div>

        </div>

    </div>


    <div id="home-products" class="aloe-products-wrapper container mx-auto">
        <h2>Produkty</h2>
        <div class="aloe-divider"><span></span></div>
        <?php echo do_shortcode('[products limit="21" orderby="date" order="DESC" columns="3"]') ?>
    </div>

    <div class="aloe-go-to-shop--wrapper">
        <a class="aloe-go-to-shop--btn" target="_blank" href="<?php echo get_home_url('null', 'sklep') ?>">Przejd?? do
            sklepu</a>
    </div>

    <div class="aloe-posts-wrapper container mx-auto border">
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
                    $post_thumbnail_srcset = wp_get_attachment_image_srcset( $post_thumbnail_id, array( 400, 200 ) );
                    $thumbnail = get_the_post_thumbnail_url();
                    
        ?>

        <figure class="exad-post-grid-thumbnail">
            <a href="<?php echo the_permalink() ?>" class="no-lightbox">
                <img class="lozad" width="768" height="512" src="<?php echo $thumbnail ?> "
                    srcset="<?php echo $post_thumbnail_srcset ?>"
                    class="attachment-medium_large size-medium_large wp-post-image" alt="" loading="lazy">
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
            <h3>My wsp????pracujemy , my nie spamujemy</h3>
            <div class="aloe-newsletter-form">
                <div><?php echo do_shortcode( '[mailerlite_form form_id=1]' ) ?></div>
            </div>
        </div>
        <div class="aloe-newsletter-right">
            <img src="<?php echo get_field('zdjecie_po_prawej_stronie') ?>" alt="">
        </div>
    </div>

</div>

<?php get_footer() ?>