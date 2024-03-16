<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <script src="https://kit.fontawesome.com/ef8f9a9a47.js" crossorigin="anonymous"></script>
    <!-- inclusion jQuery
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <?php wp_head(); ?>
</head>


<body>
  <div class="bigContainer">

    <header id="header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" id="logo" class="logo" alt="logo TaliWP" />
        </a>        
    <?php 
            wp_nav_menu(array(
                'theme_location' => 'header',
                'menu_id' => 'menu-header', 
            ));
        ?>
        <div class="burger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </header>

    <!--Menu mobile-->
    <div class="menu-open inactive-mobile fade-in" id="mega-menu">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'header',
            'menu_id' => 'mega-menu', // ID attribué au menu mobile
        ));
        ?>
    </div>




