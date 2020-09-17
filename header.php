<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title', 2); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-upper">
            <div class="wrap">
                <nav class="nav-upper">
                    <ul class="header-upper__contacts">
                        <li class="header-upper__address"><i class="fas fa-map-marker-alt"></i><?php the_field('academy_address', 2); ?></li>
                        <li><i class="fas fa-phone-alt"></i><a href="tel:+<?php the_field('academy_phone', 2); ?>" class="header-upper_tel"><?php the_field('academy_phone_visual', 2); ?></a></li>
                        <li class="header-upper_email"><i class="fas fa-envelope"></i><a href="mailto:<?php the_field('academy_email', 2); ?>"><?php the_field('academy_email', 2); ?></a></li>
                    </ul>
                    <ul class="header-upper__social">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i><?php the_field('academy_facebook', 2); ?></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i><?php the_field('academy_vk', 2); ?></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i><?php the_field('academy_instagram', 2); ?></a></li>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="header-lower">
            <div class="wrap">
                <nav class="nav-lower">
                    <div class="logo">
                        <div class="header-lower__logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="long-menu">
                     

                            <?php
                            wp_nav_menu( [
                                    'menu'            => 'Main', 
                                    'container'       => false, 
                                    'menu_class'      => 'nav-bar', 
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="nav-bar">%3$s</ul>',
                                    'depth'           => 2,
                                ] );

                            ?>


                    </div>
                    <!-- Mobile navigation - Burger Menu -->
                    <button type="button" class="burger-menu" id="burger-menu-toggle">
                        <div class="burger-menu-icon">
                        </div>
                    </button>
                </nav>
            </div>
        </div>       
    </header>