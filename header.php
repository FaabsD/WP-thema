<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Fabian Hendriks">
    <title><?php bloginfo('name')?></title>
    <?php wp_head()?>
</head>

<body>
<nav>
    <?php wp_nav_menu(
        array(
        'theme_location' => 'hoofd-menu'
        )
    );?>
</nav>
<a href="<?php echo home_url()?>"><h1><?php bloginfo('name') ?></h1></a>