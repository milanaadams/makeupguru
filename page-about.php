<?php
    /*
    Template Name: О Нас
    */
?>
<?php
    get_header();
?>
<?php get_template_part( 'template-parts/page-cover-main'); ?>

<div class="section section__white">
    <div class="wrap">     
        <div class="divider"></div>
        <h2><?php echo get_the_title(); ?></h2>
<?php

if ( have_posts() ) { 
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
}

?>



    </div>
</div>


<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>