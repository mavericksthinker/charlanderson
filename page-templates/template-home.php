<?php
/**
 * Template Name: Template Home
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
        <section class="hero-section hero">
            <div id="image-carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner" role="listbox">
                    <div id="lottie" class="carousel-item active">
                        <div class="carousel-captions text-center">
                            <div class="caption text-center">
                                <div class="hero-header">
                                    <h1 class="hero-header__text animate fadeInUp">Charla Anderson</h1>
                                    <p class="hero-footer__text"
                                       style="color: #d95204;"
                                    >
                                        Your Courageous Coach ~ Your Inspired Speaker ~ Your Published Author
                                    </p>
                                </div>
                                <a class="call-to-action__button header animate"
                                   style="z-index: 29; margin-top: 3rem; color: white;border: 1px solid white"
                                   href="<?php echo esc_url( home_url( '/about-charla' ) ); ?>"
                                >
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="lottie1" class="carousel-item">
                        <div class="carousel-captions text-center">
                            <div class="caption text-center">
                                <div class="hero-header">
                                    <h1 class="hero-header__text" style="color: #FFFFEB">Courageous Coach</h1>
                                    <p class="hero-footer__text"
                                       style="color: white;"
                                    >
                                        Your Courageous Coach ~ Your Inspired Speaker ~ Your Published Author
                                    </p>
                                </div>
                                <a class="call-to-action__button header animate"
                                   style="z-index: 29; margin-top: 3rem; color: white; border: 1px solid white"
                                   href="<?php echo esc_url( home_url( '/courageous-coach' ) ); ?>"
                                >
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="lottie2" class="carousel-item">
                        <div class="carousel-captions text-center">
                            <div class="caption text-center">
                                <div class="hero-header">
                                    <h1 class="hero-header__text" style="color: #FFFFEB">Inspired Speaker</h1>
                                    <p class="hero-footer__text"
                                       style="color: white;"
                                    >
                                        Your Courageous Coach ~ Your Inspired Speaker ~ Your Published Author
                                    </p>
                                </div>
                                <a class="call-to-action__button header animate"
                                   style="z-index: 29; margin-top: 3rem;  color: white; border: 1px solid white"
                                   href="<?php echo esc_url( home_url( '/inspired-speaker' ) ); ?>"
                                >
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-scroll-for-more">
                        <div class="header-scroll-for-more__container">
                            <span class="header-scroll-for-more__line"></span>
                            <span class="header-scroll-for-more__text"> Scroll for more</span>
                        </div>
                    </div>
<!--                    <div class="hero-header">-->
<!--                        <a class="hero-section__call-to-action hero-section__call-to-action__get-started"-->
<!--                           style="z-index: 29;"-->
<!--                           href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--"-->
<!--                        >-->
<!--                            Get Started-->
<!--                        </a>-->
<!--                    </div>-->
                </div>
                <a class="carousel-control-prev" style="z-index: 29" href="#image-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#image-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="about-section">
            <img class="mega-menu__logo"
                 style="opacity: 0.04; z-index: 29"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="about">
                <h2 class="section-header heading animate">Meet Charla</h2>
                <div class="section-body">
                    <figure>
                        <img class="about-image animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/About_Charla.jpg"
                             alt="Meet Charla"
                        >
                    </figure>
                    <p class="about-paragraph animate slide-right">
                        JOY is my lifestyle, wellness is my passion, encouragement is my gift…to you! My purpose is to share the message of unconditional Love and to fill you with the inspiration and motivation that will move you to find the JOY you deserve.  Are you ready to leave a Legacy of Intentional Significance?
                        I’m a Ziglar Legacy Certified Trainer, serial entrepreneur, author of “Candy Bar Hugs~It Doesn’t Take Much To Make A Difference!”, Your INSPIRED Speaker, Your COURAGEOUS Coach, wellness advocate, world traveler, Fort Worth ambassador, former 34 year flight-attendant with a plethora of life experiences to inspire your journey through life.  My mission is to Love people through these unsteady times, to live in complete Peace.
                    </p>
                </div>
                <a class="button__read-more button__read-more__about about-section__button"
                   href="<?php echo esc_url( home_url( '/about-charla' ) ); ?>"
                >
                    Read More
                </a>
            </div>
        </section>
        <section class="youtube-section">
            <div class="youtube">
                <h6 class="section-youtube__header heading animate">Join me on this amazing journey through the sweet spot of life.
                    - Charla Anderson</h6>
                <iframe class="featured-youtube"
                        width="80%"
                        height="515px"
                        loading="lazy"
                        sameSite="none"
                        src="https://www.youtube.com/embed/RwdThUpIT3I"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                >
                </iframe>
                <p class="youtube-paragraph">
<!--                    When Intriguing opportunities present themselves, AND YOU SAY YES, things show up-->
                </p>
                <a class="button__read-more button__view-more__youtube"
                   href="<?php echo esc_url( home_url( '/about-charla' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="service-section">
            <div class="service">
                <h2 class="section-services__header heading animate" style="color: #FFFFEB">Intriguing Opportunities</h2>
                <p class="service-section__paragraph heading animate">When intriguing opportunities present themselves, and you say YES, things show up!</p>
                <h2 class="section-header heading animate" style="color: #FFFFEB; margin-top: 1.5em">Yes-timonials</h2>
                <div id="service-carousel"
                     class="carousel slide carousel-fade"
                     data-ride="carousel"
                     data-interval="6000">
                    <div class="carousel-inner"
                         role="listbox"
                    >
                        <div class="carousel-item active service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="services__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies4.jpg"
                                             alt="Courageous Coach"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h3 class="service-section__container__header slide-right animate">Lexia, TX</h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            You’ve taught me how to be a friend, when to be a friend, and to love a friend, unconditionally! Thank you for being my Friend! 💯😘💋.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="services__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                                             alt="Author"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h3 class="service-section__container__header slide-right animate">Christi, DFW</h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Charla, I would absolutely love to meet you!
                                            I am finding that there are more dynamic women in the Dallas-Fort Worth area then I ever knew.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="services__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                                             alt="Inspired Speaker"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h3 class="service-section__container__header slide-right animate">Ron, UT</h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Charla is a very intelligent, kind, caring and thoughtful woman.
                                            I really enjoy listening to her, her program content and her guests.
                                            She has me forever!!!
                                        </p>
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
        <section class="blogs-section" style="display: flex; justify-content: space-between;align-items: center; flex-direction: column">
            <a class="button__read-more button__read-more__service yestimonial-section__explore-button"
               href="<?php echo esc_url( home_url( '/yestimonies' ) ); ?>"
               style="margin-bottom: 1.5em"
            >
                View More
            </a>
            <div class="blog-section__container">
                <h2 class="section-header heading animate">Blogs and Blessings by Charla</h2>
                <div class="glider-contain">
                    <div id="blog_carousel" class="glider">
                        <div class="blog-section__content">
                            <div>
                                <img class="blog__image animate slide-left"
                                     data-src="<?php echo get_template_directory_uri(); ?>/img/blogs/split-second.jpg"
                                     alt="Courageous Coach"
                                >
                            </div>
                            <div class="service-section__container blogs-section__container__block">
                                <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                                    style="color: rgba(0, 0, 0, 1)"
                                >
                                    Split-Second Transformation
                                </h3>
                                <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                                   style="color: rgba(0, 0, 0 , 0.61)"
                                >
                                    Words matter. 
                                    You’ve heard it, but do you really believe it?   
                                    Actually, you Create your life with your words. 
                                    I’ll give you some simple tests to begin proving it to yourself....
                                </p>
                                <a class="button__read-more button__read-more__service blogs-section__button slide-right animate"
                                   style="z-index: 29; margin-top: 3rem; color: rgba(0, 0, 0 , 0.61)"
                                   href="<?php echo esc_url( home_url( '/motivational/split-second-transformation' ) ); ?>"
                                >
                                    Explore
                                </a>
                            </div>
                        </div>
                        <div class="blog-section__content">
                            <div>
                                <img class="blog__image animate slide-left"
                                     data-src="<?php echo get_template_directory_uri(); ?>/img/blogs/blogs3.jpg"
                                     alt="Ideas for Kids part 2"
                                >
                            </div>
                            <div class="service-section__container blogs-section__container__block">
                                <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                                    style="color: rgba(0, 0, 0, 1)"
                                >
                                    Birthday Party
                                </h3>
                                <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                                   style="color: rgba(0, 0, 0 , 0.61)"
                                >
                                    It’s been decades since I hosted my own children’s birthday parties!
                                    Yet, with my privilege to now host my precious GrandBlessings occasionally,
                                    it brought to mind some of the truly inspired ideas that I used for planning parties.
                                </p>
                                <a class="button__read-more button__read-more__service blogs-section__button slide-right animate"
                                   style="z-index: 29; margin-top: 3rem; color: rgba(0, 0, 0 , 0.61)"
                                   href="<?php echo esc_url( home_url( '/ideas-for-kids/birthday-party' ) ); ?>"
                                >
                                    Explore
                                </a>
                            </div>
                        </div>
                        <div class="blog-section__content">
                            <div>
                                <img class="blog__image animate slide-left"
                                     data-src="<?php echo get_template_directory_uri(); ?>/img/blogs/blogs4.jpg"
                                     alt="Ideas for Kids part 1"
                                >
                            </div>
                            <div class="service-section__container blogs-section__container__block">
                                <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                                    style="color: rgba(0, 0, 0, 1)"
                                >
                                    Ideas for Kids, Part-1
                                </h3>
                                <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                                   style="color: rgba(0, 0, 0 , 0.61)"
                                >
                                    Recently, two of my GrandBlessings, almost 8 & 10 years old, stayed with me for a week
                                    for the first time (they are a relatively new addition to our family 🥰).
                                </p>
                                <a class="button__read-more button__read-more__service blogs-section__button slide-right animate"
                                   style="z-index: 29; margin-top: 3rem; color: rgba(0, 0, 0 , 0.61)"
                                   href="<?php echo esc_url( home_url( '/ideas-for-kids/ideas-for-kids-part-1' ) ); ?>"
                                >
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                    <button aria-label="Previous" class="glider-prev">«</button>
                    <button aria-label="Next" class="glider-next">»</button>
                    <div role="tablist" class="dots"></div>
                </div>
                <a class="button__read-more button__read-more__about button__read-more__blog"
                   href="<?php echo esc_url( home_url( '/charlas-blog' ) ); ?>"
                >
                    Read More
                </a>
            </div>
        </section>
    </main>
<?php

get_footer();
