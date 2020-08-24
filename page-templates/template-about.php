<?php
/**
 * Template Name: Template About
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
            <div class="about__hero-section__image">
                <h1 class="header-text animate fadeInUp">About Charla</h1>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="about-section__intro">
            <img class="mega-menu__logo"
                 style="opacity: 0.04; z-index: 29"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="about-body">
                <div class="about-section-body">
                    <figure>
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/About_Charla.jpg"
                             alt="About Charla"
                        >
                    </figure>
                    <p class="about-paragraph-right animate slide-right" >
                        JOY is my lifestyle, wellness is my passion, encouragement is my gift…to you! My purpose is to share the message of unconditional Love and to fill you with the inspiration and motivation that will move you to find the JOY you deserve.  Are you ready to leave a Legacy of Intentional Significance?
                        I’m a Ziglar Legacy Certified Trainer, serial entrepreneur, author of “Candy Bar Hugs~It Doesn’t Take Much To Make A Difference!”, Your INSPIRED Speaker, Your COURAGEOUS Coach, wellness advocate, world traveler, Fort Worth ambassador, former 34 year flight-attendant with a plethora of life experiences to inspire your journey through life.  My mission is to Love people through these unsteady times, to live in complete Peace.
                        Living each moment as it comes, I AM Outrageously Optimistic & Outrageously Courageous in ‘Bold Faith NO fear!’ I am here to make a difference in your life. I am here to encourage you. I am here to remind you of WHO YOU ARE, which is perfect, exactly as you are!
                    </p>
                </div>
            </div>
        </section>
        <section class="about-section__how-we-got-started">
            <div class="about-body">
                <h2 class="about__section-header heading animate"
                    style="color: #FFFFEB"
                >
                    How I Got Started
                </h2>
                <div class="about-section-body">
                    <p class="about-paragraph-left animate slide-left" style="color: white">
                        After 34 incredible years as a flight-attendant for Delta AirLines, raising 3+3 kids, the pool house, mission trip Mom & never a dull moment, I knew I would definitely keep busy.  I joined a wonderful mlm, Zurvita, in 2008, & I am still loving that company & the unequaled Zeal Wellness product keeps me energized, focused & healthy every day.  I began networking, meeting people, & acting on my saying of: "When intriguing opportunities present themselves, & you say YES, things show up!"
                        I jumped into my own radio show, TV shows, traveled, hosted events, & everything in between.  Getting my Ziglar Legacy Certification was a huge blessing, & I began considering Speaking & Coaching.  I self published my first book, “Candy Bar Hugs~It Doesn’t Take Much To Make A Difference!”, with two more books in the works.  Now, Candy Bar Hugs is a pay-it-forward type movement.
                        My mission is to "Leave the world a better place" by Loving each person I encounter, unconditionally, & letting my light shine.  I am Outrageously Optimistic & Outrageously Courageous. I Choose JOY!  I Choose Love!  And I choose to bless You, and watch you Smile.
                    </p>
                    <figure>
                        <img class="about-image-right animate slide-right"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/about/how-we-got-started.png"
                             alt="About Charla"
                        >
                    </figure>
                </div>
            </div>
        </section>
        <section class="about-section__courageous-coach">
            <div class="about-body padding-bottom-3">
                <h2 class="about__section-header heading animate"
                    style="color: #FFFFEB"
                >
                    Your Courageous Coach
                </h2>
                <div class="about-section-body">
                    <figure>
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/about/coach-about-bg.jpg"
                             alt="Your Courageous Coach"
                        >
                    </figure>
                    <p class="about-paragraph-right animate slide-right" style="color: white">
                        With my ‘your COURAGEOUS Coach’ program, I encourage those harboring deep or subtle discontent,
                        discouragement, or fear to find their Courage, and learn to step into their Authority,
                        resulting in living a life of complete Peace, which means Prosperity, in every aspect of the word. 
                        Because I can see exactly Who You ARE, I will help you develop the confidence to step into the life
                        you desire and deserve, ultimately leaving a beautiful Legacy of Intentional Significance in
                        your community and your family.
                    </p>
                </div>
                <a class="button__read-more button__view-more__youtube"
                   href="<?php echo esc_url( home_url( '/courageous-coach' ) ); ?>"
                >
                    View More
                </a>
            </div>
        </section>
        <section class="about-section__inspired-speaker">
            <div class="about-body padding-bottom-3">
                <h2 class="about__section-header heading animate"
                    style="color: #FFFFEB"
                >
                    Your Inspired Speaker
                </h2>
                <div class="about-section-body">
                    <p class="about-paragraph-left animate slide-left" style="color: white">
                        As a published author, speaker, coach, Ziglar Legacy Certified trainer, retired 34 year flight attendant,
                        and serial entrepreneur, as well as a radio & TV host, Charla has a plethora of life experiences,
                        training, humor, and wisdom which will enrich, entertain, and encourage your audience, team or group.
                        Charla’s underlying message of Unconditional Love, combined with her Bold Faith Courage,
                        helps people learn to have the self-love needed to find the best in other people,
                        the best in their situations, and the best in their workplaces, resulting in a win/win/win attitude.
                    </p>
                    <figure>
                        <img class="about-image-right animate slide-right"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/about/inspired-speaker.jpg"
                             alt="Your Inspired Speaker"
                        >
                    </figure>
                </div>
                <a class="about__button__read-more about__button__read-more__about"
                   href="<?php echo esc_url( home_url( '/inspired-speaker' ) ); ?>"
                >
                    Read More
                </a>
            </div>
        </section>
        <section class="about-section__published-author">
            <div class="about-body padding-bottom-3">
                <h2 class="about__section-header heading animate">Your Published Author</h2>
                <div class="about-section-body">
                    <figure>
                        <img class="about-image-left animate slide-left"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/about/published-author.jpg"
                             alt="Your Published Author"
                        >
                    </figure>
                    <p class="about-paragraph-right animate slide-right">
                        “What’s your favorite candy bar?” That’s a question I occasionally began asking the check-out clerks
                        when I went grocery shopping. Then, “May I give you a hug?” The varied responses and stories I received
                        are what initiated this small book. What if we pay it forward to those behind the cash register, blessing the person
                        in front of you, not necessarily the ones buying gourmet coffee behind you?  
                        In loving the next person we meet, and giving them a kind word, a smile, a nice touch on the shoulder or even a hug,
                        we begin brightening the energy around us. It truly doesn’t take much to make a difference!
                        You may not be able to change THE world, but you CAN change YOUR world. Today! What if all it takes is Candy Bar Hugs?
                    </p>
                </div>
                <a class="about__button__read-more about__button__read-more__about"
                   href="<?php echo esc_url( home_url( '/charlas-choices/books' ) ); ?>"
                >
                    Read More
                </a>
            </div>
        </section>
        <section class="about__blogs-section">
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
                                    I’ll give you some simple tests to begin proving it to yourself. 
                                    When you say the words, “I’m so tired” or “I’m beat” or “I’m exhausted”, which you probably are at that moment…   
                                    If you change that one word to “I’m refreshed” or “I’m energized” or “I’m pumped!”, something kind of magical happens. 
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
