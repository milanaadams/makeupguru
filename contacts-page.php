<?php
    /*
    Template Name: Наши контакты
    */
?>
<?php
    get_header();
?>
<?php get_template_part( 'template-parts/page-cover'); ?>

<div class="section section__white">
    <div class="wrap">     
       
        
        <div class="contacts-page-block">
            <div class="contact-page-map">
                <div class="contact-page-map-inner">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa692acaeab21f3f9131d40a5981a67705d87f6ca088b47c3f00373f6907770a8&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
                </div>
            </div>
            <div class="contact-page-info">
                <div class="contact-page-inner">
                    <div class="contact-page-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-page-info-text"><h3>Адрес учебного класса:</h3> г. Минск, пр-кт. Независимости, 11/2.</div>
                </div>
                <div class="contact-page-inner">
                    <div class="contact-page-info-icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="contact-page-info-text"><h3>Контактный номер:</h3> <a href="tel:+<?php the_field('academy_phone', 2); ?>" class="header-upper_tel"><?php the_field('academy_phone_visual', 2); ?></a></div>
                </div>
                <div class="contact-page-inner">
                    <div class="contact-page-info-icon"><i class="fas fa-clock"></i></div>
                    <div class="contact-page-info-text"><h3>Режим работы колл-центра:</h3> <?php the_field('working_hours_info', 2); ?></div>
                </div>
                <div class="contact-page-inner">
                    <div class="contact-page-info-icon"><i class="fas fa-envelope"></i></div>
                    <div class="contact-page-info-text"><h3>E-mail:</h3><?php the_field('academy_email', 2); ?></div>
                </div>
            </div>
        </div>
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