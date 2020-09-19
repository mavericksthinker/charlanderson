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
    <h2 class="section-header heading animate" style="color: white">Affiliates</h2>
    <div class="glider-contain">
        <div id="blog_carousel" class="glider2">
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/affiliates1.png"
                         style="box-shadow: none; -webkit-filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6)); filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6));"
                         alt="Banner Season"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        Banner Season
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Personalized gifts close and retain customers. Our service helps you build better relationships with those who matter to you.
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://bannerseason.com/CHARLA"
                    >
                        Visit Site
                    </a>
                </div>
            </div>
        </div>
        <button aria-label="Previous" id="affiliates-prev" class="glider-prev">«</button>
        <button aria-label="Next" id="affiliates-next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
