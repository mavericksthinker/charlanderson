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
    <h2 class="section-header heading animate" style="color: white">Products</h2>
    <div class="glider-contain">
        <div id="blog_carousel" class="glider1">
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         style="box-shadow: none; -webkit-filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6)); filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, .6));"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/ziglar-logo.png"
                         alt="All Things ZIGLAR"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        All Things Ziglar
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Books; Products; ​Training/Coaching; ​Ziglar Legacy Certified Training
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://www.ziglar.com/?a=85053&c=99"
                    >
                        Visit Site
                    </a>
                </div>
            </div>
            <div class="blog-section__content">
                <div>
                    <img class="blog__image animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/choices/eyeglass_holder.png"
                         alt="Magnetic Eyeglass Holders"
                    >
                </div>
                <div class="service-section__container blogs-section__container__block">
                    <h3 class="service-section__container__header blogs-section__container__header slide-right animate"
                        style="color: rgba(0, 0, 0, 1)"
                    >
                        Magnetic Eyeglass Holders
                    </h3>
                    <p class="service-section__container__paragraph blogs-section__paragraph slide-right animate"
                       style="color: rgba(0, 0, 0 , 0.61)"
                    >
                        Fun; ​Stylish; Functional; Great Gift; NO DUSTING!  My silly Smart Pin Video from 2010.  YES, I've been wearing Smart Pins since 2008.
                        Download the catalogue
                    </p>
                    <a class="about__button__read-more about__button__read-more__about choice-page__button slide-right animate"
                       style="z-index: 29; margin-top: 3rem;"
                       target="_blank"
                       href="https://bit.ly/34JIl8G"
                    >
                        View Catalog
                    </a>
                </div>
            </div>
        </div>
        <button aria-label="Previous" id="product-prev" class="glider-prev">«</button>
        <button aria-label="Next" id="product-next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
