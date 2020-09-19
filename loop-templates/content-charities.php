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
    <h2 class="section-header heading animate">Charla’s Charities</h2>
    <div class="glider-contain">
        <div id="blog_carousel" class="glider4">
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/fwhope.png"
                         alt="FwHope"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        FwHope
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        The Fort Worth Hope Center inspires hope and provides resources for children and families to build happy,
                        healthy, successful lives and communities. We want the people who come here to feel genuinely accepted and loved.
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://www.fwhope.org/"
                    >
                        Learn More
                    </a>
                </div>
            </div>
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/charities1.jpeg"
                         style="box-shadow: none; -webkit-filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6)); filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6));"
                         alt="Cenikor"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        Cenikor Fort Worth
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Cenikor. A Place for Change. Providing a Foundation for Better Health and Better Lives.

                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://www.cenikor.org"
                    >
                        Learn More
                    </a>
                </div>
            </div>
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/zurvita.png"
                         alt="Zurvita / Zeal Wellness"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        Zurvita / Zeal Wellness
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Energy, Focus, Functional SuperFood  Zeal keeps me Healthy, Wealthy, Wise, Fit, Fabulous & FUN!
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://amzn.to/2qGVehM"
                    >
                        Explore
                    </a>
                </div>
            </div>
        </div>
        <button aria-label="Previous" id="charities-prev" class="glider-prev">«</button>
        <button aria-label="Next" id="charities-next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
