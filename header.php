<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo("name"); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
    <nav class="navbar">
    <a href="/" class="menu_title_link"><?php the_custom_logo(); ?></a>
    <a href="/" class="menu_link"><?php bloginfo("name"); ?></a>
    <?php
    wp_nav_menu( array( 
        'theme_location' => 'my-custom-menu', 
        'container_class' => 'navbar' ) ); 
        ?>
        <div class="navbar_title">
            </div>
        </nav>
    </header>