<?php
/**
 * Template Name: Template Courageous Coach
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
    <section class="about__hero-section hero">
        <div class="coach-page__hero-section__image">
            <div class="hero-header">
                <h1 class="coach-page-header__text animate fadeInUp">Your Courageous Coach</h1>
            </div>
        </div>
        <div class="header-scroll-for-more">
            <div class="header-scroll-for-more__container">
                <span class="header-scroll-for-more__line"></span>
                <span class="header-scroll-for-more__text"> Scroll for more</span>
            </div>
        </div>
    </section>
    <section class="coach-page__section1">
        <img class="mega-menu__logo"
             style="opacity: 0.04; z-index: 29"
             data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
             alt="Charla Anderson">
        <div class="coach-page__body">
            <div class="about-section-body">
                <figure>
                    <img class="coach-image-left animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/coach/coach-image2.jpg"
                         alt="About Charla"
                    >
                </figure>
                <p class="coach-page-paragraph-right animate slide-right">
                    With my ‘Your COURAGEOUS Coach’ program, I encourage those harboring deep or subtle discontent,
                    discouragement, or fear to find their Courage, and learn to step into their Authority,
                    resulting in living a life of complete Peace, which means Prosperity, in every aspect of the word.
                </p>
            </div>
        </div>
    </section>
    <section class="coach-page__section2">
        <div class="coach-body">
            <div class="coach-section-body">
                <p class="coach-page-paragraph-left animate slide-left">
                    Who You ARE, I will help you develop the confidence to step into the life you desire and deserve,
                    ultimately leaving a beautiful Legacy of Intentional Significance in your community and your family.
                    Because I can see exactly Who You ARE, I will help you develop the confidence to step into the life you desire and deserve,
                    ultimately leaving a beautiful Legacy of Intentional Significance in your community and your family.
                </p>
                <figure>
                    <img class="coach-image-right animate slide-right"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/coach/coach-image3.jpg"
                         alt="About Charla"
                    >
                </figure>
            </div>
        </div>
    </section>
    <section class="video-section">
        <div class="youtube">
            <h6 class="section-youtube__header heading animate">Tom Ziglar/Charla Stronger video</h6>
            <video class="featured-youtube"
                    width="77%"
                    height="515px"
                   controls="true"
            >
                <source src="<?php echo get_template_directory_uri(); ?>/img/coach/courageous-coach.mp4"
                        type="video/mp4"
                />
            </video>
            <a class="about__button__read-more about__button__read-more__about"
               href="https://letsmeet.io/charlaanderson/30-min-fb-or-li-call"
               style="margin-top: 5rem;"
               target="_blank"
            >
                FREE Discovery Call!
            </a>
        </div>
    </section>
    <section class="coach-page__paragraph">
        <div class="choices-page__paragraph-container">
            <p class="choices-page__paragraph-container__text"
               style='text-transform: uppercase;'
            >
                Courage + Authority = Peace, Prosperity, Joy, Happiness!
            </p>
        </div>
    </section>
<?php
get_footer();
