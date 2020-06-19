<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Fabian Hendriks">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Navbar</a>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'hoofd-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </nav>

        <div class="jumbotron" style="background-image: url(<?php echo get_template_directory_uri() . '/img/cave.jpg'?>);">
            <h1 class="display-4"><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
            <p class="lead"><?php echo bloginfo('description') ?></p>
        </div>
    </header>