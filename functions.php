<?php
// laad stylesheets & scripts
function loadStylesheet()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/scripts/bootstrap.min.js', array( 'jquery' ), 1.4, true);
}
add_action('init', 'loadStylesheet');

// menu registreren

function registerMenu()
{
    $argumenten = array(
        'hoofd-menu' => __('hoofd menu')
    );
    register_nav_menus($argumenten);
}
add_action('init', 'registerMenu');

/**
 * Register Custom Navigation Walker
*/
function register_navwalker(){
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// registreer widgets

function register_widgets(){
    register_sidebar(
        array(
            'id' => 'aside',
            'name' => __('Side widgets'),
            'description' => __('Widget voor in het aside element'),
            'before_widget' => '<div class="widget-aside">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action( 'init', 'register_widgets' );

?>
