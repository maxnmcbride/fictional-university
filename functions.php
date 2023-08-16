<?php

    function university_files(){
        wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
        wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    }

    add_action('wp_enqueue_scripts', 'university_files');

    function university_features(){
        // register_nav_menu('headerMenuLocation', 'Header Menu Location');
        // register_nav_menu('footerLocationOne', 'FooterLocation One');
        // register_nav_menu('footerLocationTwo', 'FooterLocation Two');
        // these are needed for the menu creation through admin navigation
        add_theme_support('title-tag');
    }
    // this will add the title to the tab (think privacy policy example)

    add_action('after_setup_theme', 'university_features');
    // this will create an individual title for each page to be displayed in the tab of the browser
?>