<?php
function kinderwald_enqueue_styles() {

    $parent_style = 'lodestar';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kinderwald',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    // add intro for front page
    if (is_front_page()) {
        wp_enqueue_style( 'intro',
            get_stylesheet_directory_uri() . '/assets/styles/intro.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action( 'wp_enqueue_scripts', 'kinderwald_enqueue_styles' );

function kinderwald_enqueue_scripts() {

    // add intro for front page
    if (is_front_page() && empty($_COOKIE['intro_was_shown'])) {
        wp_enqueue_script('jcookie',
            '//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js',
            array( 'jquery' ),
            wp_get_theme()->get('Version'),
            true
        );

         wp_enqueue_script('intro',
            get_stylesheet_directory_uri() . '/assets/scripts/intro.js',
            array( 'jquery', 'jcookie' ),
            wp_get_theme()->get('Version'),
            true
        );
    }
}

add_action( 'wp_enqueue_scripts', 'kinderwald_enqueue_scripts', 100 );
?>