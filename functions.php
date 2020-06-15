<?php
// laad stylesheets
function loadStylesheet()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
}
add_action('init', 'loadStylesheet');

// menu registreren

function registerMenu()
{
    $argumenten = array(
        'hoofd-menu' => __('Hoofd menu')
    );
    register_nav_menus();
}
add_action('init', 'registerMenu');

/**
 * Register Custom Navigation Walker
*/
function register_navwalker(){
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>