<?php
function sakura_styles() {

    // Fonction pour appeler le style de mon child theme
    wp_enqueue_style( 'base', get_template_directory_uri() . '/assets/css/base.css', false, '1.1', 'all');
    
    
    // Fonction pour appeler le style de mon child theme
    wp_enqueue_style( 'sakura-style', get_stylesheet_uri());
}

function sakura_scripts() {
    wp_enqueue_scripts( 'app', get_template_directory_uri() . '/assets/js/app.js', false, '1.1', true);

}

add_action('wp_enqueue_scripts', 'sakura_styles');
add_action('wp_enqueue_scripts', 'sakura_scripts');


