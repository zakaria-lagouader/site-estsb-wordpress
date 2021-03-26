<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('body-class'); ?>>
    <!-- Navbar Section -->
    <header id="navbar">
        <div class="container">
            <nav>
                <a href="<?php bloginfo('url'); ?>" id="logo">ESTSB</a>
                <ul class="nav-links">
                    <li><a href="<?php bloginfo('url'); ?>" class="nav-link">Accueil</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/actualites" class="nav-link">Actualites</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/propos" class="nav-link">A propos de nous</a></li>
                </ul>
            </nav>
        </div>
    </header>