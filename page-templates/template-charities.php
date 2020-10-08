<?php
/**
 * Template Name: Template charities
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
            <div class="book-page__hero-section__image-charities">
                <div class="hero-header">
                    <h1 class="book-page__hero-header__text animate fadeInUp">
                        Charla’s Charities
                    </h1>
                </div>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="books-page__section-1">
            <img class="mega-menu__logo"
                 style="opacity: 0.04; z-index: 1"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="about-body">
	            <?php
	            if ( function_exists('yoast_breadcrumb') ) {
		            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	            }
	            ?>
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
                            healthy, successful lives and communities. We want the people who come here to feel genuinely accepted and loved.
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-right"
                           href="https://www.fwhope.org/"
                           rel="noopener"
                           target="_blank"
                        >
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="charity-page__section-2">
            <div class="about-body">
                <div class="choices-page-container">
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-left">Cenikor Fort Worth</h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-left">
                            Cenikor. A Place for Change. Providing a Foundation for Better Health and Better Lives.
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-left"
                           href="https://www.cenikor.org"
                           rel="noopener"
                           target="_blank"
                        >
                            Learn More
                        </a>
                    </div>
                    <div class="choices-container choices-container__image">
                        <img class="about-image-left animate slide-right"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/cenikor.png"
                             alt="Cenikor"
                        >
                    </div>
                </div>
            </div>
        </section>
        <section class="books-page__section-3">
            <div class="about-body">
                <div class="choices-page-container">
                    <div class="choices-container choices-container__body">
                        <h2 class="choices-page__body animate slide-right">Zurvita / Zeal Wellness</h2>
                        <p class="about-paragraph-right choices-paragraph animate slide-right">
                            Energy, Focus, Functional SuperFood  Zeal keeps me Healthy, Wealthy, Wise, Fit, Fabulous & FUN!
                        </p>
                        <a class="about__button__read-more about__button__read-more__about choice-page__button animate slide-right"
                           href="https://zurvita.com/pages/zurvitagiving?als=charla&m=US"
                           rel="noopener"
                           target="_blank"
                        >
                            Visit Site
                        </a>
                    </div>
                    <div class="choices-container choices-container__image">
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/zurvita.png"
                             alt="Zurvita / Zeal Wellness"
                        >
                    </div>
                </div>
            </div>
        </section>
        <section class="books-page__section-4">
            <div class="service">
                <h2 class="service-section__header heading animate" >Explore Other Choices</h2>
                <div id="service-carousel"
                     class="carousel slide carousel-fade"
                     data-ride="carousel"
                     data-interval="6000">
                    <div class="carousel-inner"
                         role="listbox"
                    >
                        <div aria-selected="true" role="listitem" class="carousel-item active service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="choices-carousel__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/services/service2_logo.jpg"
                                             alt="Candy Bar Hugs"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h2 class="choices-section__container__header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Books
                                        </h2>
                                        <h3 class="choices-section__container__sub-header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Candy Bar Hugs
                                        </h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            It Doesn’t Take Much To Make A Difference!
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/charlas-choices/books' ) ); ?>"
                                        >
                                            View More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-selected="true" role="listitem" class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="choices-carousel__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/zurvita.png"
                                             alt="Zurvita"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h2 class="choices-section__container__header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Products
                                        </h2>
                                        <h3 class="choices-section__container__sub-header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Zurvita / Zeal Wellness
                                        </h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Energy, Focus, Functional SuperFood  Zeal keeps me Healthy, Wealthy, Wise, Fit, Fabulous & FUN!
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/charlas-choices/products' ) ); ?>"
                                        >
                                            View More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-selected="true" role="listitem" class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="choices-carousel__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/ride-share.png"
                                             style="box-shadow: none;"
                                             alt="Ride Share"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h2 class="choices-section__container__header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Affiliates
                                        </h2>
                                        <h3 class="choices-section__container__sub-header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Gizmoh RideShare! 
                                        </h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Drivers Keep 100%!  Globally!  Unmatched Benefits.  Use Promo Code:  CHA8961
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/charlas-choices/affiliates' ) ); ?>"
                                        >
                                            View More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div aria-selected="true" role="listitem" class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="choices-carousel__image ab-websolutions animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/choices/ab-websolutions.png"
                                             style="box-shadow: none;"
                                             alt="AB Websolutions"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h2 class="choices-section__container__header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            Faves
                                        </h2>
                                        <h3 class="choices-section__container__sub-header slide-right animate"
                                            style="margin-bottom: 1.5rem"
                                        >
                                            AB Websolutions 
                                        </h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Creativity, reliability, and integrity are the hallmarks of every aspect of our work.
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/charlas-choices/faves' ) ); ?>"
                                        >
                                            View More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev"
                       href="#service-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#service-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
