<section class="section feedback">
        <div class="wrap">
            <div class="section__header">
                <div class="divider"></div>
                <h2><?php the_field('feedback_title', 2); ?></h2>
            </div>
            <div class="feedback-slider">
            <?php
                    $posts = get_posts( array(
                        'numberposts' => 3,
                        'category_name'    => 'feedback',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                        <div class="feedback-slider-item">
                            <div class="feedback-slide">
                                <a class="feedback-slide__name our-teachers__name" href="<?php the_field('feedback_social'); ?>" target="_blank"><?php the_field('feedback_name'); ?></a>
                                <div class="feedback-slide__text"><?php the_field('feedback_text'); ?></div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                ?>

            </div>
            <div class="feedback-button">
                <a href="<?php echo bloginfo('url');?>/feedback/" class="btn feedback-slider-btn">Больше отзывов</a>
            </div>
        </div>
    </section>