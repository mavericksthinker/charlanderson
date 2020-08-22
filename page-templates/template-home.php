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
                                        Your COURAGEOUS Coach ~ Your INSPIRED Speaker ~ Published Author
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
                                    <h1 class="hero-header__text" style="color: #FFFFEB">Your Courageous Coach</h1>
                                    <p class="hero-footer__text"
                                       style="color: white;"
                                    >
                                        Your COURAGEOUS Coach ~ Your INSPIRED Speaker ~ Published Author
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
                                    <h1 class="hero-header__text" style="color: #FFFFEB">Your Inspired Speaker</h1>
                                    <p class="hero-footer__text"
                                       style="color: white;"
                                    >
                                        Your COURAGEOUS Coach ~ Your INSPIRED Speaker ~ Published Author
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
                <h2 class="section-header heading animate">About Charla</h2>
                <div class="section-body">
                    <figure>
                        <img class="about-image animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/About_Charla.jpg"
                             alt="About Charla"
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
                        src="https://www.youtube.com/embed/RwdThUpIT3I"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                >
                </iframe>
                <p class="youtube-paragraph">
                    When Intriguing opportunities present themselves, AND YOU SAY YES, things show up
                </p>
                <a class="button__read-more button__view-more__youtube"
                   href="https://letsmeet.io/charlaanderson/50-minute-discovery-call"
                   target="_blank"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="service-section">
            <div class="service">
                <h2 class="section-youtube__header heading animate" style="color: #FFFFEB">What Is Your Heart Seeking?</h2>
                <p class="service-section__paragraph heading animate">We Think You Can Find a Path Towards It Using One Of Our Brilliant Tools.</p>
                <div id="service-carousel"
                     class="carousel slide carousel-fade"
                     data-ride="carousel"
                     data-interval="6000">
                    <div class="carousel-inner"
                         role="listbox"
                    >
                        <div class="carousel-item active service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
<!--                            <figure>-->
<!--                                <img class="service__base-carousel-image"-->
<!--                                     src="--><?php //echo get_template_directory_uri(); ?><!--/img/services/services-bg.png"-->
<!--                                     alt="Courageous Coach"-->
<!--                                >-->
<!--                            </figure>-->
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="services__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/services/service1_logo.png"
                                             alt="Courageous Coach"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h3 class="service-section__container__header slide-right animate">Courageous Coach</h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Let's have a free conversation to determine if we mesh.
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/courageous-coach' ) ); ?>"
                                        >
                                            Explore
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
<!--                            <figure>-->
<!--                                <img class="service__base-carousel-image"-->
<!--                                     src="--><?php //echo get_template_directory_uri(); ?><!--/img/services/services-bg.png"-->
<!--                                     alt="Author"-->
<!--                                >-->
<!--                            </figure>-->
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="services__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/services/service2_logo.jpg"
                                             alt="Author"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h3 class="service-section__container__header slide-right animate">Published Author</h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Let's have a free conversation to determine if we mesh.
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/about-charla' ) ); ?>"
                                        >
                                            Explore
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item service-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/services/services-bg.png')">
<!--                            <figure>-->
<!--                                <img class="service__base-carousel-image"-->
<!--                                     src="--><?php //echo get_template_directory_uri(); ?><!--/img/services/services-bg.png"-->
<!--                                     alt="Inspired Speaker"-->
<!--                                >-->
<!--                            </figure>-->
                            <div class="carousel-caption text-center">
                                <div class="services">
                                    <figure>
                                        <img class="services__image animate slide-left"
                                             data-src="<?php echo get_template_directory_uri(); ?>/img/services/service3_logo.png"
                                             alt="Inspired Speaker"
                                        >
                                    </figure>
                                    <div class="service-section__container">
                                        <h3 class="service-section__container__header slide-right animate">Inspired Speaker</h3>
                                        <p class="service-section__container__paragraph slide-right animate">
                                            Invite Charla to Speak.  Online; Webinar; Keynote; Inspire.
                                        </p>
                                        <a class="button__read-more button__read-more__service explore-services__button slide-right animate"
                                           style="z-index: 29; margin-top: 3rem"
                                           href="<?php echo esc_url( home_url( '/inspired-speaker' ) ); ?>"
                                        >
                                            Explore
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
        <section class="home-testimonial">
            <div class="testimonial-slider-container">
                <h4 class="testimonies-header heading animate" style="color: #FFFFEB">YES-timonies</h4>
                <div class="testimonial-body">
                    <div id="home-testimonial-slider" >
                        <div class="cloud9-item">
                            <div class="testimonial-image">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies4.jpg">
                            </div>
                            <div class="testimonial-info">
                                <p class="testimonial-name">Lexia</p>
                                <p class="testimonial-title">TX</p>
                                <p class="testimonial-content">I first met Charla at a networking event hiding out in the kitchen 🤗! We’ve been in touch since as friends, motivational buddies, accountability partners and sooo much more!!! You’ve taught me how to be a friend, when to be a friend,
                                    and to love a friend, unconditionally! Thank you for being my Friend! 💯😘💋.
                                </p>
                            </div>
                        </div>
                        <div class="cloud9-item">
                            <div class="testimonial-image">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies2.png">
                            </div>
                            <div class="testimonial-info">
                                <p class="testimonial-name">Rhonda</p>
                                <p class="testimonial-title">TX</p>
                                <p class="testimonial-content">My friend from early childhood who has the kindest soul and most uplifting outlook much needed in these uncertain times.</p>
                            </div>
                        </div>
                        <div class="cloud9-item">
                            <div class="testimonial-image">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies1.png">
                            </div>
                            <div class="testimonial-info">
                                <p class="testimonial-name">Julie</p>
                                <p class="testimonial-title">AZ</p>
                                <p class="testimonial-content">A wonderful soul!</p>
                            </div>
                        </div>
                    </div>
                    <div class="yestimonials">
                        <div class="yestimonies-content">
                            <img class="yestimonies-image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies4.jpg"
                            >
                            <div class="yestimonial-content__body">
                                <h5 class="yestimonies-content__header">Lexia</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    I first met Charla at a networking event hiding out in the kitchen 🤗! We’ve been in touch since as friends, motivational buddies, accountability partners and sooo much more!!! You’ve taught me how to be a friend, when to be a friend,
                                    and to love a friend, unconditionally! Thank you for being my Friend! 💯😘💋.
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-content">
                            <img class="yestimonies-image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies2.png"
                            >
                            <div class="yestimonial-content__body">
                                <h5 class="yestimonies-content__header">Rhonda</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    My friend from early childhood who has the kindest soul and most uplifting outlook much needed in these uncertain times.
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-content">
                            <img class="yestimonies-image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies1.png"
                            >
                            <div class="yestimonial-content__body">
                                <h5 class="yestimonies-content__header">Julie</h5>
                                <span class="yestimonies-content__title">AZ</span>
                                <p class="yestimonies-content__description">
                                    A wonderful soul!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="button__read-more button__read-more__service yestimonial-section__explore-button"
                   href="<?php echo esc_url( home_url( '/yestimonies' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="blogs-section">
            <div class="blog-section__container">
                <h2 class="section-header heading animate">Charla's Blog</h2>
                <div class="glider-contain">
                    <div id="blog_carousel" class="glider">
                        <div class="blog-section__content">
                            <div>
                                <img class="blog__image animate slide-left"
                                     data-src="<?php echo get_template_directory_uri(); ?>/img/blogs/blog1.png"
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
                <a class="button__read-more button__read-more__about about-section__button"
                   href="<?php echo esc_url( home_url( '/charlas-blog' ) ); ?>"
                >
                    Read More
                </a>
            </div>
        </section>
    </main>
<?php
get_footer();
