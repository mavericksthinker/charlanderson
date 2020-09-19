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
    <h2 class="section-header heading animate">Books</h2>
    <div class="glider-contain">
        <div id="blog_carousel" class="glider4">
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
        <button aria-label="Previous" id="charities-prev" class="glider-prev">«</button>
        <button aria-label="Next" id="charities-next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
