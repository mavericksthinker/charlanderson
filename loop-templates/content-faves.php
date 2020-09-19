<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="blog-section__container" style="padding: 0">
    <h2 class="section-header heading animate" style="color: white">Faves</h2>
    <div class="glider-contain">
        <div id="blog_carousel" class="glider3">
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/ab-websolutions.png"
                         style="box-shadow: none; -webkit-filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6)); filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6));"
                         alt="AB Websolutions"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        AB Websolutions
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Creativity, reliability, and integrity are the hallmarks of every aspect of our work.
                        AB Web Solutions provides results-oriented website design &  development, social media management &
                        marketing, SEO and content writing designed to meet our clients’ business objectives.
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://www.facebook.com/ABWebSolutions.DigitalMarketing/"
                    >
                        Visit Site
                    </a>
                </div>
            </div>
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/brilliance_in_commerce.jpg"
                         style="box-shadow: none; -webkit-filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6)); filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6));"
                         alt="Brilliance In Commerce"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        Brilliance In Commerce
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Why negotiate, consolidate, reduce, settle or pay off your loan or credit card debt,
                        when you can legally CANCEL it without bankruptcy?
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://brillianceincommerce.com/go/85/"
                    >
                        Explore
                    </a>
                </div>
            </div>
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/grid365.png"
                         style="box-shadow: none; -webkit-filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6)); filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6));"
                         alt="Grid365"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        Grid365
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        The cloud empowers, individuals and small businesses to instantly set up enterprise-class services enabling them to compete globally.
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem; color:"
                       target="_blank"
                       href="https://www.Grid365.com"
                    >
                        Visit Site
                    </a>
                </div>
            </div>
        </div>
        <button aria-label="Previous" id="faves-prev" class="glider-prev">«</button>
        <button aria-label="Next" id="faves-next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
