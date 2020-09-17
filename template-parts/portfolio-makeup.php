<div class="portfolio__content">

    <div class="slider-portfolio">
        <?php
                $postsport = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'front-page-slider',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                
                foreach( $postsport as $post ){
                    setup_postdata($post);
                    ?>
                    <div class="portfolio-slider-item">
                        <img src="<?php the_field('front_page_slider_image'); ?>">
                    </div>
                    <?php
                }
                wp_reset_postdata();
            ?>          

    </div>

</div>