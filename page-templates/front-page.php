<?php
/**
 * Template Name: Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Limestone
 */

get_header();
?>
    <main id="primary" class="site-main">
        <section class="header-section">
            <div class="header-section__row">
                <div class="header-section__col-text">
                    <div class="header-section__col-text_inner">
                        <h1 class="header-section__title">Introducing PollSmart!</h1>
                        <p>Company, a leading provider of people driven insights, is excited to announce an innovative
                            new research solution, <b>PollSmart! We’ve partnered with polling experts, Targoz Market
                                Research </b>to power the sample on a groundbreaking model for political polling.</p>
                    </div>
                </div>
                <div class="header-section__col-image">
                    <img class="header-section__img"
                         src="<?php echo get_template_directory_uri() . '/build/images/image-01.jpg' ?>" alt="alt-text">
                </div>
            </div>
        </section>
        <section class="info-section">
            <div class="info-section__container">
                <div class="info-section__row">
                    <div class="info-section__col-left">
                        <img src="<?php echo get_template_directory_uri() . '/build/images/image-02.png'; ?>" alt="alt-text">
                    </div>
                    <div class="info-section__col-right">
                        <div class="info-section__text-wrapper">
                            <h2 class="info-section__title info-section__title--high-line">Providing a deep glimpse into key
                                groups
                                of voters this election season.
                            </h2>
                            <p>PollSmart was cleverly devised to provide a fast, informative, and cost-effective deliverable
                                that
                                employs innovative methodologies to provide an accurate read on today’s voters. </p>
                        </div>
                    </div>
                 </div><!--.info-section__row-->
            </div><!--.info-section__container-->
        </section><!--.info-section-->
        <section class="info-section">
            <div class="info-section__container">
                <div class="info-section__row">
                    <div class="info-section__col-left info-section__col-left--mobile-second">
                        <div class="info-section__text-wrapper">
                            <h2 class="info-section__title">Explore the issues that are
                                top-of-mind
                                among voters today.
                            </h2>
                            <p>In addition to providing current insights on preferred candidates among relevant groups of
                                voters,
                                PollSmart explores the most important issues among voters. </p>
                            <p>PollSmart is launching value-oriented polls for a wide range of elections around the country
                                beginning this fall</p>
                        </div>
                    </div>
                    <div class="info-section__col-right">
                        <img src="<?php echo get_template_directory_uri() . '/build/images/image-03.png'; ?>"
                             alt="alt-text">
                    </div>
                </div><!--.info-section__row-->
            </div><!--.info-section__container-->
        </section><!--.info-section-->
        <aside class="contact-form">
            <div class="contact-form__container">
                <div class="contact-form__inner">
                    <div class="contact-form__title"><?php _e('Intrigued to Learn More?', 'limestone'); ?></div>
                    <?php echo do_shortcode('[contact_form_limestone]'); ?>
                </div>
            </div>
        </aside>
    </main><!-- #main -->


<?php
get_sidebar();
get_footer();
