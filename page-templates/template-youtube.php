<?php
/**
 * Template Name: Template Youtube
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
    <main class="main-body">
        <section class="youtube-page__section1 hero">
            <div class="youtube-page__hero-image">
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="youtube-body__section">
            <div class="youtube-page__header">
                <div class="youtube-page__header-body">
                    <div class="youtube-page__header-body__left">
                        <img class="youtube-page__header-body__left__image"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo.png"
                        >
                        <div class="youtube-page__header-body__left__label">
                            <span class="youtube-page__header-body__left__label-name"> Charla Anderson </span>
                            <span class="youtube-page__header-body__left__label-description">Author | Coach | Speaker</span>
                        </div>
                    </div>
                    <div class="youtube-page__header-body__right">
                        <a class="about__button__read-more about__button__read-more__about"
                           href="https://www.youtube.com/channel/UCRqjTKOQS5ImL7k707TIAAg"
                           target="_blank"
                        >
                            Subscribe
                        </a>
                    </div>
                </div>
            </div>
            <div class="youtube-page-section">
            <img class="yestimonies__logo"
                 style="opacity: 0.04; z-index: 29"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="youtube-body">
                <a class="youtube-body__container youtube-body__container-link"
                   href="https://www.youtube.com/watch?v=IDBhaRbWgd4"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/youtube/youtube-thumbnail1.jpg"
                         alt="Courageous Coach"
                         class="youtube-body__container__image"
                    >
                    <span class="youtube-body__container__paragraph">Your Courageous Coach offers Connection</span>
                </a>
                <a class="youtube-body__container youtube-body__container-link"
                   href="https://www.youtube.com/watch?v=WWQHSzj4jcg"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/youtube/Charla.jpg"
                         alt="Your Courageous Coach"
                         class="youtube-body__container__image"
                    >
                    <span class="youtube-body__container__paragraph">Charla & TOM ZIGLAR, STRONGER...</span>
                </a>
                <a class="youtube-body__container youtube-body__container-link"
                   href="https://www.youtube.com/watch?v=HXfZjepmd1w"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/youtube/charlas-decalration.png"
                         alt="Your Courageous Coach"
                         class="youtube-body__container__image"
                    >
                    <span class="youtube-body__container__paragraph">Charla's Declarations for Living a Joyful Life ...</span>
                </a>
                <a class="youtube-body__container youtube-body__container-link"
                   href="https://www.youtube.com/watch?v=oDVrAPgkLGc"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/youtube/love.png"
                         alt="Your Courageous Coach"
                         class="youtube-body__container__image"
                    >
                    <span class="youtube-body__container__paragraph">LOVE or fear? Where are YOU?</span>
                </a>
                <a class="youtube-body__container youtube-body__container-link"
                   href="https://www.youtube.com/watch?v=EbZslyTkyUs&feature=youtu.be"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/youtube/outlink1.png"
                         alt="Your Courageous Coach"
                         class="youtube-body__container__image"
                    >
                    <span class="youtube-body__container__paragraph">Candy Bear Hugs - Charla Anderson and Pat Iyer</span>
                </a>
                <a class="youtube-body__container youtube-body__container-link"
                   href="https://www.youtube.com/watch?v=YZTWYg5qBwE&feature=youtu.be"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/youtube/outlink3.png"
                         alt="Your Courageous Coach"
                         class="youtube-body__container__image"
                    >
                    <span class="youtube-body__container__paragraph">As a published author, speaker, coach ...</span>
                </a>
            </div>
        </div>
        </section>
    </main>
<?php
get_footer();
