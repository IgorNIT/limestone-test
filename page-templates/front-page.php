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
        <section class="intro-section">
            <div class="intro-section__row">
                <div class="intro-section__col-text">
                    <h1 class="intro-section__title"></h1>
                    <p>Company, a leading provider of people driven insights, is excited to announce an innovative new research solution, <b>PollSmart! We’ve partnered with polling experts, Targoz Market Research </b>to power the sample on a groundbreaking model for political polling.</p>
                </div>
                <div class="intro-section__col-image">
                    <img class="intro-section__img" src="<?php echo get_template_directory_uri(). '/build/images/image-01.jpg'?>" alt="alt-text">
                </div>
            </div>
        </section>
        <section class="info-section">
            <div class="info-section__col-left info-section__col-left--mobile-first>
                <img src="<?php echo get_template_directory_uri(). '/build/images/image-02.png'?>" alt="alt-text">
            </div>
            <div class="info-section__col-right">
                <div class="info-section__title info-section__title--high-line">Providing a deep glimpse into key groups of voters this election season.</div>
                <p>PollSmart was cleverly devised to provide a fast, informative, and cost-effective deliverable that employs innovative methodologies to provide an accurate read on today’s voters. </p>
            </div>
        </section>
        <section class="info-section">
            <div class="info-section__col-left">
                <img src="<?php echo get_template_directory_uri(). '/build/images/image-03.png'?>" alt="alt-text">
            </div>
            <div class="info-section__col-right info-section__col-right--mobile-first">
                <div class="info-section__title info-section__title--high-line">Explore the issues that are top-of-mind among voters today.</div>
                <p>In addition to providing current insights on preferred candidates among relevant groups of voters, PollSmart explores the most important issues among voters. </p>
                <p>PollSmart is launching value-oriented polls for a wide range of elections around the country beginning this fall</p>
            </div>
        </section>
        <aside class="contact-form">
            <div class="contact-form__container">
                <div class="contact-form__inner">

                </div>
            </div>
        </aside>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
