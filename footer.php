<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Limestone
 */

?>

<footer class="site-footer">
    <div class="site-footer__container">
        <div class="site-footer__row">
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu_1',
                        'container' => false,
                        'menu_class' => 'footer-menu'
                    )
                );

                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu_2',
                        'container' => false,
                        'menu_class' => 'footer-menu'
                    )
                );

                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu_3',
                        'container' => false,
                        'menu_class' => 'footer-menu'
                    )
                );
                ?>
            </nav><!--.footer-navigation-->
            <ul class="terms-menu">
                <li><a href="#"><?php _e('Terms of Use', 'limestone'); ?></a></li>
                <li><a href="#"><?php _e('Privacy Policy', 'limestone'); ?></a></li>
            </ul><!-- .terms-menu -->
            <ul class="socials-list">
                <li>
                    <a href="#" target="_blank">
                        <svg width="34" height="34">
                            <use xlink:href="#linledin-icon"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <svg width="34" height="34">
                            <use xlink:href="#twitter-icon"></use>
                        </svg>
                    </a>
                </li>
            </ul><!-- .socials-list -->
        </div> <!-- .site-footer__row-->
    </div><!-- .site-footer__container-->
</footer><!-- .site-footer -->

</div><!-- #page -->

<svg width="0" height="0" class="hidden">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138 118" id="linledin-icon">
        <path d="M114.46 2.252H22.118c-6.348 0-11.543 5.123-11.543 11.385v91.088c0 6.262 5.195 11.386 11.543 11.386h92.342c6.348 0 11.542-5.124 11.542-11.386V13.637c0-6.262-5.194-11.385-11.542-11.385zm-69.257 96.78H27.89V47.795h17.314zm-8.657-60.915c-5.77 0-10.388-4.554-10.388-10.247s4.617-10.247 10.388-10.247c5.772 0 10.389 4.554 10.389 10.247s-4.617 10.247-10.389 10.247zm72.142 60.915H91.374V68.86c0-4.554-4.04-8.54-8.657-8.54s-8.657 3.986-8.657 8.54v30.173H56.746V47.795H74.06v6.832c2.886-4.555 9.234-7.97 14.428-7.97 10.966 0 20.2 9.108 20.2 19.925z"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138 118" id="twitter-icon">
        <path d="M136.525 17.41c-5.038 2.21-10.406 3.675-16.002 4.386 5.757-3.437 10.152-8.839 12.217-15.35-5.367 3.2-11.294 5.461-17.61 6.723A27.83 27.83 0 0094.844 4.38c-15.376 0-27.754 12.48-27.754 27.78 0 2.2.186 4.317.643 6.333C44.645 37.366 24.215 26.3 10.49 9.443c-2.396 4.158-3.8 8.917-3.8 14.038 0 9.618 4.953 18.144 12.336 23.08-4.462-.084-8.84-1.38-12.548-3.42v.305c0 13.495 9.627 24.705 22.25 27.288-2.26.618-4.724.914-7.28.914-1.779 0-3.574-.102-5.259-.474 3.599 10.998 13.81 19.084 25.95 19.346a55.802 55.802 0 01-34.433 11.845c-2.278 0-4.462-.102-6.647-.38 12.302 7.932 26.882 12.462 42.605 12.462 51.104 0 79.044-42.333 79.044-79.028 0-1.228-.042-2.413-.101-3.59 5.512-3.911 10.143-8.797 13.919-14.418z"></path>
    </symbol>
</svg>

<?php wp_footer(); ?>

</body>
</html>
