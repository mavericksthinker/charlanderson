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
    <main class="main-body">
        <section class="about__hero-section hero">
            <div class="choices__hero-section__image">
                <h1 class="header-text animate fadeInUp">Charla's Choices</h1>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="choices-page__books">
            <img class="mega-menu__logo"
                 style="opacity: 0.04; z-index: 1"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="about-body">
                <h1 class="about__section-header heading animate">Books</h1>
                <div class="choices-page-container">
                    <div class="choices-container choices-container__image">
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/services/service2_logo.jpg"
                             alt="Candy Bar Hugs"
                        >
                    </div>
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-right">Candy Bar Hugs</h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-right">
                            It Doesn’t Take Much To Make A Difference!
                        </p>
                        <div class="purchase-group">
                            <a class="about__button__read-more about__button__read-more__about choice-page__button purchase-button animate slide-right"
                               href="https://amzn.to/2JSGeUl"
                               target="_blank"
                            >
                                Book
                            </a>
                            <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-right"
                               href="http://amzn.to/2BwA5ut"
                               target="_blank"
                            >
                                Kindle
                            </a>
                        </div>
                    </div>
                </div>
                <a class="about__button__read-more about__button__read-more__about"
                   style="z-index: 20"
                   href="<?php echo esc_url( home_url( '/charlas-choices/books' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="choices-page__products">
            <div class="about-body">
                <h1 class="about__section-header heading animate">Products</h1>
                <div class="choices-page-container">
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-left">Zurvita / Zeal Wellness</h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-left">
                            Energy, Focus, Functional SuperFood  Zeal keeps me Healthy, Wealthy, Wise, Fit, Fabulous & FUN!
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-left"
                           href="https://www.zurvita.com/charla/en/us/"
                           target="_blank"
                        >
                            Explore
                        </a>
                    </div>
                    <div class="choices-container choices-container__image">
                        <iframe loading="lazy"
                                class="charla-choices-page__zeal-video"
                                src="https://www.youtube.com/embed/jvlWx1QhOsk"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                        >
                        </iframe>
                    </div>
                </div>
                <a class="about__button__read-more about__button__read-more__about"
                   href="<?php echo esc_url( home_url( '/charlas-choices/products' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="choices-page__affiliates">
            <div class="about-body">
                <h1 class="about__section-header heading animate"
                    style="color: #FFFFEB"
                >
                    Affiliates
                </h1>
                <div class="choices-page-container">
                    <div class="choices-container choices-container__image">
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/ride-share.png"
                             alt="Ride Share"
                        >
                    </div>
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-right">Gizmoh RideShare! </h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-right">
                            Drivers Keep 100%!  Globally!  Unmatched Benefits.  Use Promo Code:  CHA8961
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-right"
                           href="https://gizmohrideshare.com/"
                           target="_blank"
                        >
                            Explore
                        </a>
                    </div>
                </div>
                <a class="button__read-more button__view-more__youtube"
                   href="<?php echo esc_url( home_url( '/charlas-choices/affiliates' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="choices-page__faves">
            <div class="about-body">
                <h1 class="about__section-header heading animate"
                    style="color: #FFFFEB"
                >
                    Faves
                </h1>
                <div class="choices-page-container">
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-left">AB Websolutions</h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-left">
                            Creativity, reliability, and integrity are the hallmarks of every aspect of our work.
                            AB Web Solutions provides results-oriented website design &  development, social media management &
                            marketing, SEO and content writing designed to meet our clients’ business objectives.
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-left"
                           href="https://www.facebook.com/ABWebSolutions.DigitalMarketing/"
                           target="_blank"
                        >
                            Reach Out
                        </a>
                    </div>
                    <div class="choices-container choices-container__image">
                        <img class="about-image-left animate slide-right"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/ab-websolutions.png"
                             style="box-shadow: none;"
                             alt="AB Websolutions"
                        >
                    </div>
                </div>
                <a class="about__button__read-more about__button__read-more__about"
                   href="<?php echo esc_url( home_url( '/charlas-choices/faves' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="choices-page__charities">
            <div class="about-body">
                <h1 class="about__section-header heading animate">Charities</h1>
                <div class="choices-page-container">
                    <div class="choices-container choices-container__image">
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/fwhope.png"
                             alt="FwHope"
                        >
                    </div>
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-right">The Hope Center</h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-right">
                            The Fort Worth Hope Center inspires hope and provides resources for children and families to build happy,
                            healthy, successful lives and communities.
                            We want the people who come here to feel genuinely accepted and loved.
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-right"
                           href="https://www.fwhope.org/"
                           target="_blank"
                        >
                            Reach Out
                        </a>
                    </div>
                </div>
                <a class="about__button__read-more about__button__read-more__about"
                   href="<?php echo esc_url( home_url( '/charlas-choices/charities' ) ); ?>"
                >
                    View More
                </a>
            </div>
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
