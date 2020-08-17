<?php
/**
 * Template Name: Template Inspired Speaker
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
        <div class="about__hero-section__image">
            <h1 class="header-text animate fadeInUp">Your Inspired Coach</h1>
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
        <div class="about-body">
            <div class="about-section-body">
                <figure>
                    <img class="coach-image-left animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/coach/coach1.png"
                         alt="About Charla"
                    >
                </figure>
                <p class="about-paragraph-right animate slide-right">
                    As a published author, speaker, coach, Ziglar Legacy Certified trainer, retired 34 year flight attendant,
                    and serial entrepreneur, as well as a radio & TV host, Charla has a plethora of life experiences, training,
                    humor, and wisdom which will enrich, entertain, and encourage your audience, team or group.
                </p>
            </div>
        </div>
    </section>
    <section class="coach-page__section2">
        <div class="coach-body">
            <div class="coach-section-body">
                <p class="about-paragraph-left animate slide-left">
                    Charla’s underlying message of Unconditional Love, combined with her Bold Faith Courage,
                    helps people learn to have the self-love needed to find the best in other people, the best in their situations,
                    and the best in their workplaces, resulting in a win/win/win attitude.
                </p>
                <figure>
                    <img class="coach-image-right animate slide-right"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/coach/coach2.png"
                         alt="About Charla"
                    >
                </figure>
            </div>
        </div>
    </section>
    <section class="speaker-video-section">
        <div class="youtube">
            <h6 class="section-youtube__header heading animate">Invite Charla to Speak.  Online; Webinar; Keynote; Inspire.</h6>
            <iframe class="featured-youtube"
                    width="80%"
                    height="515px"
                    src="https://www.youtube.com/embed/RwdThUpIT3I"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
            >
            </iframe>
            <p class="youtube-paragraph"
               style="color: #0b2e13"
            >
                When Intriguing opportunities present themselves, AND YOU SAY YES, things show up
            </p>
            <a class="about__button__read-more about__button__read-more__about"
               href="<?php echo esc_url( home_url( '/youtube-channel' ) ); ?>"
            >
                Read More
            </a>
        </div>
    </section>
<?php
get_footer();
