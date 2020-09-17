<?php
    /*
    Template Name: Обучение
    */
?>
<?php
    get_header();
?>
<?php get_template_part( 'template-parts/page-cover'); ?>

<div class="section section__white">
    <div class="divider"></div>

    <div class="wrap">
    <div class="study-program-wrap">

        <?php
            $postsstudy = get_posts( array(
                'numberposts' => -1,
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'course',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            
            foreach( $postsstudy as $post ){
                setup_postdata($post);
        ?>
        
        <div class="study-program-block">
            <div class="study-program-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="study-program-info">
                <a href="<?php the_permalink(); ?>"><h3 class="study-program-name"><?php  the_title(); ?></h3></a>
                <p class="study-program-description">
                    <?php the_field('course_short_description'); ?>
                </p>
                <a class="btn study-program-btn" href="<?php the_permalink(); ?> "> Подробнее</a>
            </div>
        </div>
        <?php
            }
            wp_reset_postdata();
        ?>


    </div>
</div>
        
</div>



<div class="wrap">
    
           
    <?php

    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    }

    ?>
</div>

<?php get_template_part( 'template-parts/feedback'); ?>
<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>