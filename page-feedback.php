<?php
    /*
    Template Name: Отзывы
    */
?>
<?php
    get_header();
?>
<?php get_template_part( 'template-parts/page-cover'); ?>

<div class="section section__white">
    <div class="divider"></div>

    <div class="wrap">
    <div class="feedback-wrap">

        <?php
            $postfeedback = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'feedback',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            
            foreach( $postfeedback as $post ){
                setup_postdata($post);
        ?>
        
        <div class="feedback-page-block">
            <div class="feedback-page-photo">
                <?php the_post_thumbnail(); ?>
            </div>
            <a class="feedback-slide__name our-teachers__name" href="<?php the_field('feedback_social'); ?>" target="_blank"><?php the_field('feedback_name'); ?></a>
            <div class="feedback-slide__text"><?php the_field('feedback_text'); ?></div>
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



<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>