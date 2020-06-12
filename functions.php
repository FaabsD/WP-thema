<?php
// laad stylesheets
function loadStylesheet(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('init', 'loadStylesheet');
?>