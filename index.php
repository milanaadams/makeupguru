<?php
get_header();
?>
<?php get_template_part( 'template-parts/page-cover-main'); ?>
    <div class="section section__white">
        <div class="wrap">
            <div class="message-block">
                <div class="divider"></div>
                <p class="message-block__descr"><?php the_field('upper_message'); ?></p>
            </div>
        </div>
    </div>
    <div class="section section__grey">
        <div class="wrap">
            <div class="main-fields">
                <div class="side-img main-fields__img">
                    <?php
                        $image = get_field('main_fields_img');
                        if (!empty($image)): ?> 
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <?php endif;            
                    ?>
                </div>
                <div class="side-text main-fields__text">
                    <div class="divider"></div>
                    <p><?php the_field('main_fields'); ?></p>
                    <ul class="main-fields__list">
                        <li class="main-fields__items link-transition"><a href="<?php echo bloginfo('url');?>/course/vizazhist-bazovyj-kurs/">Профессиональный визажист - базовый курс</a></li>
                        <li class="main-fields__items link-transition"><a href="<?php echo bloginfo('url');?>/course/vizazh-pro/">Визаж PRO (курс повышения)</a></li>
                        <li class="main-fields__items link-transition"><a href="<?php echo bloginfo('url');?>/course/osnovy-professionalnogo-makiyazha/">Основы профессионального макияжа</a></li>
                        <li class="main-fields__items link-transition"><a href="<?php echo bloginfo('url');?>/course/makiyazh-dlya-sebya/">Художественное оформление бровей</a></li>
                        <li class="main-fields__items link-transition"><a href="<?php echo bloginfo('url');?>/course/hudozhestvennoe-oformlenie-brovej/">Макияж для себя</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="section section__white">
        <div class="wrap">
            <div class="advantages__header">
                    <div class="divider"></div>
                    <h2><?php the_field('advantages_title'); ?></h2>
            </div>
            <div class="advantages__table">
                <div class="advantages__item">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/worker.svg" alt="" class="advantages__icon">
                    <p class="advantages__text"><?php the_field('advantages_text_1'); ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/pin.svg" alt="" class="advantages__icon">
                    <p class="advantages__text"><?php the_field('advantages_text_2'); ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/contract.svg" alt="" class="advantages__icon">
                    <p class="advantages__text"><?php the_field('advantages_text_3'); ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/seminar.svg" alt="" class="advantages__icon">
                    <p class="advantages__text"><?php the_field('advantages_text_4'); ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/makeup.svg" alt="" class="advantages__icon">
                    <p class="advantages__text"><?php the_field('advantages_text_5'); ?></p>
                </div>
                <div class="advantages__item">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/girl.svg" alt="" class="advantages__icon">
                    <p class="advantages__text"><?php the_field('advantages_text_6'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <div class="section section__grey">
        <div class="wrap">
                <div class="divider"></div>
                <p class="makeup-products__desc">
                    <?php the_field('advantages_long_message'); ?>
                </p>
        </div>
    </div>
    <div class="section section__white">
        <div class="brands">
            <div class="brands-slider">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'brands-slider',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="brands-slider-item">
                            <img src="<?php the_field('brands_image'); ?>" class="brands__item">
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="section section__darkgrey">
        <div class="wrap">
            <div class="mission">
                <div class="side-text mission__descr">
                    <div class="divider"></div>
                    <p><?php the_field('our_aim_text'); ?></p>
                    <a href="<?php echo bloginfo('url');?>/obuchenie/" class="btn mission-btn"><?php the_field('our_aim_button_text'); ?></a>
                </div>
                <div class="side-img mission__img">
                    <?php
                        $image = get_field('our_aim_image');
                        if (!empty($image)): ?> 
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <?php endif;            
                    ?>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="section our-teachers">
            <div class="wrap">
                <div class="section__header">
                    <div class="divider"></div>
                    <h2><?php the_field('our_teachers_title'); ?></h2>
                </div>
                <div class="our-teachers__gallery">
                    <?php
                        $teachers = get_posts( array(
                            'numberposts' => 3,
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'teacher',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        
                        foreach( $teachers as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="our-teachers__item">
                                    <div class="our-teachers__img">
                                        <?php
                                            $image = get_field('teachers_photo');
                                            if (!empty($image)): ?> 
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                            <?php endif;            
                                        ?>
                                    </div>
                                    <div class="our-teachers__descr">
                                        <ul class="our-teachers__social">
                                                <?php
                                                    $field = get_field('enable_teachers_facebook');

                                                    if ($field == 'Enable') {
                                                        ?>
                                                            <li><a href="<?php the_field('teachers_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                        <?php
                                                    }
                                                  
                                                ?>

                                                <?php
                                                    $field = get_field('enable_teachers_vk');

                                                    if ($field == 'Enable') {
                                                        ?>
                                                            <li><a href="<?php the_field('teachers_vk'); ?>" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                        <?php
                                                    }
                                                ?>

                                                <?php
                                                    $field = get_field('enable_teachers_instagram');

                                                    if ($field == 'Enable') {
                                                        ?>
                                                            <li><a href="<?php the_field('teachers_instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                        <?php
                                                    }
                                                ?>
                                                
                                                
                                                
                                        </ul>
                                        <div class="our-teachers__name">
                                            <a class="link-transition" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="our-teachers__position"><?php the_field('teachers_field'); ?></div>
                                    </div>
                                </div>
                            <?php
                        }
                        wp_reset_postdata();
                    ?>

                </div>
            </div>  
        </div>
    </section>

    <section class="section section__white">
        <div class="section__header">
            <div class="divider"></div>
            <h2><?php the_field('portfolio_title'); ?></h2>
        </div>
        <?php get_template_part( 'template-parts/portfolio-makeup'); ?>
        <a href="<?php echo bloginfo('url');?>/nashe-portfolio/" class="btn mission-btn">Больше фотографий</a>

    </section>

    
    <div class="section section__grey">
        <div class="wrap">
            <div class="section__header">
                <div class="divider"></div>
            </div>    
                <p class="makeup-room__text"><?php the_field('our_class_room_description'); ?></p>
                <div class="makeup-room__gallery">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'class-room',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                    <div class="makeup-room__item">
                        <img src="<?php the_field('classroom_gallery'); ?>">
                    </div>
                        <?php
                    }
                    wp_reset_postdata();
                ?>
                </div>
            
        </div>
    </div>


    <?php get_template_part( 'template-parts/feedback'); ?>



    <?php get_template_part( 'template-parts/private-lessons'); ?>
    <div class="insta-feed">INSTAGRAM FEED</div>

<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>