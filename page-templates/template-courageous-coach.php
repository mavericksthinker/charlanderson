<?php
/**
 * Template Name: Template Courageous Coach
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
    <section class="about__hero-section hero">
        <div class="coach-page__hero-section__image">
            <div class="hero-header">
                <h1 class="hero-header__text animate fadeInUp">Your Courageous Coach</h1>
            </div>
        </div>
        <div class="header-scroll-for-more">
            <div class="header-scroll-for-more__container">
                <span class="header-scroll-for-more__line"></span>
                <span class="header-scroll-for-more__text"> Scroll for more</span>
            </div>
        </div>
    </section>
    <section class="coach-page__section1">
        <img class="mega-menu__logo"
             style="opacity: 0.04; z-index: 29"
             data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
             alt="Charla Anderson">
        <div class="about-body">
            <div class="about-section-body">
                <figure>
                    <img class="coach-image-left animate slide-left"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/coach/coach1.png"
                         alt="About Charla"
                    >
                </figure>
                <p class="about-paragraph-right animate slide-right">
                    With my ‘your COURAGEOUS Coach’ program, I encourage those harboring deep or subtle discontent,
                    discouragement, or fear to find their Courage, and learn to step into their Authority,
                    resulting in living a life of complete Peace, which means Prosperity, in every aspect of the word.
                </p>
            </div>
        </div>
    </section>
    <section class="coach-page__section2">
        <div class="coach-body">
            <div class="coach-section-body">
                <p class="about-paragraph-left animate slide-left">
                    Who You ARE, I will help you develop the confidence to step into the life you desire and deserve,
                    ultimately leaving a beautiful Legacy of Intentional Significance in your community and your family.
                </p>
                <figure>
                    <img class="coach-image-right animate slide-right"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/coach/coach2.png"
                         alt="About Charla"
                    >
                </figure>
            </div>
        </div>
    </section>
    <section class="video-section">
        <div class="youtube">
            <h6 class="section-youtube__header heading animate">Tom Ziglar/Charla Stronger video</h6>
            <iframe class="featured-youtube"
                    width="80%"
                    height="515px"
                    src="https://ssrweb.zoom.us/cmr/replay/2020/03/25/311168593/934F629C-C68A-44F2-87A6-A3DC82CAF786/GMT20200325-221647_Stronger--_1760x900.mp4?response-content-type=video%2Fmp4&response-cache-control=max-age%3D0%2Cs-maxage%3D86400&data=c8dd449bc923b2f59df8b00c7afdf17d2f33e52bf953963260c1878feab81671&s001=yes&cid=us02&fid=upAsc-D7rj03G9OUtASDB_EvW467Jqish3Ue-_ENnka3B3JXYVWkb-ZAMOoutN1GFUcWDfda8lKAb4KW&s002=_dN5eqrs_3luBtWQuR6HBP99R9u8KqvkjHUC1KNN6AcdF6lAIpb6NbyIeg&Policy=eyJTdGF0ZW1lbnQiOiBbeyJSZXNvdXJjZSI6Imh0dHBzOi8vc3Nyd2ViLnpvb20udXMvY21yL3JlcGxheS8yMDIwLzAzLzI1LzMxMTE2ODU5My85MzRGNjI5Qy1DNjhBLTQ0RjItODdBNi1BM0RDODJDQUY3ODYvR01UMjAyMDAzMjUtMjIxNjQ3X1N0cm9uZ2VyLS1fMTc2MHg5MDAubXA0P3Jlc3BvbnNlLWNvbnRlbnQtdHlwZT12aWRlbyUyRm1wNCZyZXNwb25zZS1jYWNoZS1jb250cm9sPW1heC1hZ2UlM0QwJTJDcy1tYXhhZ2UlM0Q4NjQwMCZkYXRhPWM4ZGQ0NDliYzkyM2IyZjU5ZGY4YjAwYzdhZmRmMTdkMmYzM2U1MmJmOTUzOTYzMjYwYzE4NzhmZWFiODE2NzEmczAwMT15ZXMmY2lkPXVzMDImZmlkPXVwQXNjLUQ3cmowM0c5T1V0QVNEQl9Fdlc0NjdKcWlzaDNVZS1fRU5ua2EzQjNKWFlWV2tiLVpBTU9vdXROMUdGVWNXRGZkYThsS0FiNEtXJnMwMDI9X2RONWVxcnNfM2x1QnRXUXVSNkhCUDk5Ujl1OEtxdmtqSFVDMUtOTjZBY2RGNmxBSXBiNk5ieUllZyIsIkNvbmRpdGlvbiI6eyJEYXRlTGVzc1RoYW4iOnsiQVdTOkVwb2NoVGltZSI6MTU5NzA3NTg1NX19fV19&Signature=fOxgreYrFMxzcsAcGHLGiyM3umGzMuKYQhbLfgbG7HKLRoMw9bT7fGyCTVgBr3LaQOJFwKiwg0q-2lj64mDRvAFMRvryOwQLN5lpcGMP6MyLSzHFIsnuBPwLemznveWDncPSn2MAlm9Nsh4PuR1Xh~b~VIQ-Oc2Kg97fC9enTCH6BZJj8jZWzY3VsL1lNYodEE38bEKR9M8pc3fkP6jEfKEqVbfrT34ipTSEczsVSgpzKzkWnZTUZ5vuA1l9~Vte7XmHkn4IiusSZDww2m6K7y7qqRBDeyRtvpAPg9JBmoF56bQ4r5obk86-qZa2YR2ZAipN9RESue4WOt6lj~fL2g__&Key-Pair-Id=APKAJFHNSLHYCGFYQGIA"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
            >
            </iframe>
            <a class="about__button__read-more about__button__read-more__about"
               href="https://letsmeet.io/charlaanderson/50-minute-discovery-call"
               style="margin-top: 5rem"
            >
                FREE Discovery Call!
            </a>
        </div>
    </section>
    <section class="coach-page__paragraph">
        <div class="choices-page__paragraph-container">
            <p class="choices-page__paragraph-container__text"
               style='text-transform: uppercase;'
            >
                Courage + Authority = Peace, Prosperity, Joy, Happiness!
            </p>
        </div>
    </section>
<?php
get_footer();
