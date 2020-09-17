<?php
    /*
    Template Name: Наши преподаватели
    */
?>
<?php
    get_header();
?>
<?php get_template_part( 'template-parts/page-cover'); ?>

<div class="section section__white">
    <div class="divider"></div>

    <div class="wrap">
    <div class="teachers-wrap">

        <?php
            $postteacher = get_posts( array(
                'numberposts' => -1,
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'teacher',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            
            foreach( $postteacher as $post ){
                setup_postdata($post);
        ?>
        
        <div class="teachers-block">
            <div class="teachers-visual">
                <div class="teachers-thumbnail">
                    <?php
                        $image = get_field('teachers_photo');
                        if (!empty($image)): ?> 
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <?php endif;            
                    ?>
                </div>
                <div class="teachers-social-block">
                    <ul class="teachers-social-icons">
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
                </div>
            </div>    
            <div class="teachers-info">
                <a href="<?php the_permalink(); ?>"><h3 class="teachers-name"><?php  the_field('teachers_name'); ?></h3></a>
                <p class="teachers-description">
                    <?php the_field('teacher_description'); ?>
                </p>
                <a class="btn teachers-btn" href="<?php the_permalink(); ?> "> Подробнее</a>
            </div>
        </div>
        <?php
            }
            wp_reset_postdata();
        ?>


    </div>
</div>
        
</div>






<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>