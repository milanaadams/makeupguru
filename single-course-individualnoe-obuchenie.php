<?php
get_header();
?>


<?php get_template_part( 'template-parts/page-cover-course'); ?>

<div class="section section__grey">
    <div class="wrap">     
        <div class="course-description">
            <div class="divider"></div>
            <?php the_field('course_short_description'); ?> 
        </div>
        
    </div>
</div>



<div class="section section__white">
    <div class="wrap">     
        <div class="course-description">
        <div class="divider"></div>
            
             
            <?php

            if ( have_posts() ) { 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            }

            ?>
        </div>
        
    </div>
</div>
<?php get_template_part( 'template-parts/contact-form-bottom'); ?>
<?php
    get_footer();
?>