<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <!-- inclusion jQuery
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <?php wp_head(); ?>
</head>


<body>
  <div class="bigContainer">

    <header id="header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo1.png" id="logo" class="logo" alt="logo TaliWP" />
        </a>        
    <?php 
            wp_nav_menu(array(
                'theme_location' => 'header',
                'menu_id' => 'menu-header', 
            ));
        ?>
        <!-- Liens vers GitHub et LinkedIn -->
        <div class="social-links">
            <a href="https://linkedin.com/in/tali-marouf" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/linkedin-logo.png" alt="LinkedIn"></a>
            <a href="https://github.com/Tali-Marouf-Arbia" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/images/github-logo.png" alt="GitHub"></a>
        </div>
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




