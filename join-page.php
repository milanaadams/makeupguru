<?php
    /*
    Template Name: Записаться
    */
?>
<?php
    get_header();
?>
<?php get_template_part( 'template-parts/page-cover'); ?>




<div class="section section__grey join-page" id="contact-bottom">
 <div class="wrap">
 <div class="join-page-inner">
            <p class="contact__text"><?php the_field('contact_block_text', 2); ?></p>
            <?php echo do_shortcode( '[contact-form-7 id="439" title="Contact Form Join Page"]' ); ?>
            <button type="submit" class="btn contact-form-popup__btn"><?php the_field('contact_block_mobile_button', 2); ?></button>
        </div>
        
    </div>
 </div>
<?php
    get_footer();
?>