<?php
get_header();
?>
<?php get_template_part( 'template-parts/page-cover-main'); ?>

<p>This is single.php page</p>

<?php

if ( have_posts() ) { 
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
}

?>

<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>