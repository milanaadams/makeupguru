<?php

// include custom jQuery
function shapeSpace_include_custom_jquery() {
 
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
 
};

add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

    add_action('wp_enqueue_scripts', 'makeupguru_styles');
    add_action('wp_enqueue_scripts', 'makeupguru_scripts');
    
    function makeupguru_styles() {
        wp_enqueue_style( 'makeupguru-style', get_stylesheet_uri() ); 
        wp_enqueue_style( 'course-single-style', get_template_directory_uri() . '/assets/css/course-single.css' );
        wp_enqueue_style( 'teacher-single-style', get_template_directory_uri() . '/assets/css/teacher-single.css' );
    };
    function makeupguru_scripts() {
        wp_enqueue_script( 'makeupguru-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );
        wp_enqueue_script( 'makeupguru-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'makeupguru-fontawesome', 'https://kit.fontawesome.com/01a3f5a560.js');
    };

    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );


    add_action( 'init', 'true_register_products4' ); // Использовать функцию только внутри хука init
 
    function true_register_products4() {
        $courses = array(
            'name' => 'Courses',
            'singular_name' => 'Course', // админ панель Добавить->Функцию
            'add_new' => 'Add Course',
            'add_new_item' => 'Add New Course', // заголовок тега <title>
            'edit_item' => 'Edit Course',
            'new_item' => 'New Course',
            'all_items' => 'All Courses',
            'view_item' => 'View the Course',
            'search_items' => 'Search Course',
            'not_found' =>  'No Course was found.',
            'not_found_in_trash' => 'No Course in trash.',
            'menu_name' => 'Courses' // ссылка в меню в админке
        );
        $args = array(
            'labels' => $courses,
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'menu_icon' => 'dashicons-welcome-learn-more', // иконка корзины
            'menu_position' => 11,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments'),
            'show_in_rest' => true,
            'taxonomies' => array('post_tag')
        );
        register_post_type('course', $args);
    };

    add_action( 'init', 'true_register_products2' );

    function true_register_products2() {
        $teachers = array(
            'name' => 'Teachers',
            'singular_name' => 'Teacher', // админ панель Добавить->Функцию
            'add_new' => 'Add Teacher',
            'add_new_item' => 'Add New Teacher', // заголовок тега <title>
            'edit_item' => 'Edit Teacher',
            'new_item' => 'New Teacher',
            'all_items' => 'All Teachers',
            'view_item' => 'View the Teacher',
            'search_items' => 'Search Teacher',
            'not_found' =>  'No Teacher was found.',
            'not_found_in_trash' => 'No Teacher in trash.',
            'menu_name' => 'Teachers' // ссылка в меню в админке
        );
        $args = array(
            'labels' => $teachers,
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'menu_icon' => 'dashicons-welcome-learn-more', // иконка
            'menu_position' => 5,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments'),
            'show_in_rest' => true,
            'taxonomies' => array('post_tag')
        );
        register_post_type('teacher', $args);
    };



    

?>