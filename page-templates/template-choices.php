<?php
/**
 * Template Name: Template Choices
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
    get_template_part( 'global-templates/hero' );
}
?>
    <main class="main-body main-choices-body">
        <section class="about__hero-section hero">
            <div class="choices-page__hero-section__image">
                <div class="hero-header">
                    <h1 class="coach-page-header__text animate fadeInUp">Charla's Choices</h1>
                </div>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="choices-page__books position-relative">
<!--            <img class="mega-menu__logo"-->
<!--                 style="opacity: 0.04; z-index: 1"-->
<!--                 data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/miscellaneous/logo_background.png"-->
<!--                 alt="Charla Anderson">-->
           <?php get_template_part( 'loop-templates/content', 'books' ); ?>
        </section>
        <section class="choices-page__books">
            <?php get_template_part( 'loop-templates/content', 'products' ); ?>
        </section>
        <section class="choices-page__books">
            <?php get_template_part( 'loop-templates/content', 'affiliates' ); ?>
        </section>
        <section class="choices-page__books">
            <?php get_template_part( 'loop-templates/content', 'faves' ); ?>
        </section>
        <section class="choices-page__books">
            <?php get_template_part( 'loop-templates/content', 'charities' ); ?>
        </section>
        <section class="choices-page__paragraph">
            <div class="choices-page__paragraph-container">
                <p class="choices-page__paragraph-container__text heading animate">
                    Affiliate, Charity, Faves info: These are a few of my favorite things… 
                    Reach out to Charla at Charla@CharlaAnderson.com or leave a message at 888-788-4153. 
                    I must really be a fan of and love using anything on this site!
                </p>
            </div>
        </section>
    </main>
<?php
get_footer();
