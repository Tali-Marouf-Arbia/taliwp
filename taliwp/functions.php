<?php

function enqueue_my_theme_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_my_theme_styles');

// Enqueue scripts.js
function enqueue_scripts_js() {
    wp_enqueue_script('js-script', get_template_directory_uri() . '/scripts.js', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_js');

// Fonction pour enregistrer mes menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header' => __('Menu du header'),  // Enregistre un emplacement de menu pour le header avec le libelle "Menu du header"
            'footer' => __('Menu du footer')   // Enregistre un emplacement avc le libelle "Menu du footer"
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

// Fonction pour ajouter le support des miniatures pour le Custom PT "Projets"
function add_thumbnail_photos() {
    add_theme_support('post-thumbnails');
}
// Ajout de l'action pour exécuter la fonction lors de l'initialisation d'ACF
add_action('acf/init', 'add_thumbnail_photos');







