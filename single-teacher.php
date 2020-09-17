<?php
get_header();
?>

<div class="sub-cover teachers-cover">
    <div class="wrap">
        <div class="sub-cover-flex">

        </div>
        
    </div>
</div>

<div class="section section__white">
    <div class="wrap">  
    <div class="divider"></div>   
        <div class="teachers-card">
            <div class="teachers-single-sidebar">
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
            <div class="teachers-single-info">

                <div class="teachers-single-name">
                    <h1 class="teachers-single-title"><?php  the_field('teachers_name'); ?></h1>
                    <div class="teachers-single-position"><?php the_field('teachers_field'); ?></div>
                </div>            
                <div class="teachers-single-gutenberg">
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
        
    </div>
</div>



<?php get_template_part( 'template-parts/contact-form-bottom'); ?>

<?php
    get_footer();
?>