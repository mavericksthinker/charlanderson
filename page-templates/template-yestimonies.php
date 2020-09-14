<?php
/**
 * Template Name: Template Yestimonies
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
            <div class="yestimonies__hero-section__image">
                <h1 class="header-text animate fadeInUp">Yes-timonials</h1>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="yestimonies-page-section__intro">
            <img class="yestimonies__logo"
                 style="opacity: 0.04; z-index: 29"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="yestimonies-page__body">
<!--                <h1 class="about__section-header heading animate">YEStimonies</h1>-->
                    <div class="yestimonials-page__content">
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies4.jpg"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Lexia</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    I first met Charla at a networking event hiding out in the kitchen 🤗! We’ve been in touch since as friends, motivational buddies, accountability partners and sooo much more!!! You’ve taught me how to be a friend, when to be a friend,
                                    and to love a friend, unconditionally! Thank you for being my Friend! 💯😘💋.
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies2.png"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Rhonda</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    My friend from early childhood who has the kindest soul and most uplifting outlook much needed in these uncertain times.
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies1.png"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Julie</h5>
                                <span class="yestimonies-content__title">AZ</span>
                                <p class="yestimonies-content__description">
                                    A wonderful soul!
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies3.png"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Celeste</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    Eternal Optimist!
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimonies6.png"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Vikki</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    I met Charla in 2017 when she walked into the Dollar Tree, where I was cashiering.
                                    Since that day she has been inspiring me to think beyond the negative and to see the positive in everything.
                                    Once, when I was in my darkest place, I called Charla, and within just a few minutes my attitude was shifted,
                                    and has never returned to that dark place again.  Charla is my beacon, my flashlight,
                                    guiding me to redirect my negative thoughts.  So happy she is my friend.
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">CRW</h5>
                                <span class="yestimonies-content__title">WI</span>
                                <p class="yestimonies-content__description">
                                    I wanted to thank you for your incredible enthusiasm regarding the program
                                    we are all involved with! I think your enthusiasm is contagious- as
                                    I also get very excited when I read your emails or look online for anything regarding the iPRO Coin.
                                    We are on the verge of huge changes in the world of finance and money.
                                    Sending love, light and blessings to you! Please don’t give up on the awesome emails!!!
                                    I love them, and look forward to them! They are very informative!!
                                    I can’t wait for this to take off! I can’t wait to see where it takes us!
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Barb S</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    Hi Charla! I am interested in your Zurvita!
                                    I love your positive energy and believe you are on to something!
                                    I saw your podcasts someone else mentioned, so we dont know one another yet!
                                    My daughter and I are working on positivity and when we saw your video,
                                    your message resonated with us!
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Christi S</h5>
                                <span class="yestimonies-content__title">DFW</span>
                                <p class="yestimonies-content__description">
                                    Charla, I would absolutely love to meet you!
                                    I am finding that there are more dynamic women in the Dallas-Fort Worth area then I ever knew.
                                    I don’t have a specific agenda other than to meet with you and be with your awesome energy.
                                    I want to find out what I might be able to help you help other women and perhaps you could help me in helping other women.
                                    Are you open to a quick conversation about a time to get together for a coffee or after work? Humbly yours, Christi.
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Kathy W</h5>
                                <span class="yestimonies-content__title">TX</span>
                                <p class="yestimonies-content__description">
                                    Because of two things I heard you say over the past few years,
                                    I got involved in something that was so outside of the box for me.
                                    Your words (summed up), say “yes” and you already have in your
                                    life the people with the education, the contacts,
                                    and the resources to help you accomplish that which you want to do.
                                    You were right!
                                </p>
                            </div>
                        </div>
                        <div class="yestimonies-page__body-content">
                            <img class="yestimonies-page__image"
                                 data-src="<?php echo get_template_directory_uri(); ?>/img/yestimonies/yestimony-default.jpg"
                            >
                            <div class="yestimonial-page__content__body">
                                <h5 class="yestimonies-content__header">Ron</h5>
                                <span class="yestimonies-content__title">UT</span>
                                <p class="yestimonies-content__description">
                                    I have known Charla since 2014. I am very happy to become acquainted with and follow her.
                                    Charla is a very intelligent, kind, caring and thoughtful woman.
                                    I really enjoy listening to her, her program content and her guests.
                                    She has me forever!!!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
<?php
get_footer();
