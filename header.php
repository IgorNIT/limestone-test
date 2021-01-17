<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Limestone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="site-header">
        <div class="site-header__container">
            <div class="site-header__row">
                <button id="menu-toggle" class="menu-hamburger hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div id="main-navigation" class="main-navigation">
                    <nav>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container'      => false,
                                'menu_id'        => 'main-menu',
                                'menu_class'     => 'main-menu',
                                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                    </nav>
                </div
            </div>
        </div>
    </header><!-- #masthead -->
