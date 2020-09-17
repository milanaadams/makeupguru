<footer class="footer">
        <div class="wrap">
            <div class="footer-inner">
                <div class="footer-left">
                    <p><span>Адрес: </span><?php the_field('academy_address', 2); ?></p>
                    <p><span>Телефон: </span><a href="tel:+<?php the_field('academy_phone', 2); ?>" class="header-upper_tel"><?php the_field('academy_phone_visual', 2); ?></a></p>
                    <p><span>E-mail: </span><a href="mailto:<?php the_field('academy_email', 2); ?>"><?php the_field('academy_email', 2); ?></a></p>
                    
                    
                </div>
                <div class="footer-center">
                    <p><span><?php the_field('working_hours_text', 2); ?></span><?php the_field('working_hours_info', 2); ?></p>
                </div>
                <div class="footer-right">
                    <p><?php the_field('right_side_footer_info', 2); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="contact-form-modal">
            <div class="contact-form-toggle-wrap">
                <button type="button" class="contact-form-modal-toggle">
                    <div class="contact-form-modal-close"></div>
                </button>
            </div>

            <div class="contact-form-modal-wrap">
                
                    <div class="contact-form-modal-inner">
                     <div class="contact-inner-fields">
                            <?php echo do_shortcode( '[contact-form-7 id="329" title="Contact form 1"]' ); ?>
                     </div>
                    </div>
                
                </div>
                
            </div>
        
    </div>
    <?php 
    wp_footer(); 
    ?>

</body>
</html>