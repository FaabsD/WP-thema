<?php
// laad stylesheets
function loadStylesheet(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('init', 'loadStylesheet');

// menu registreren

function registerMenu(){
    $argumenten = array(
        'hoofd-menu' => __('Hoofd menu')
    );
    register_nav_menus();
}
add_action('init', 'registerMenu');
?>