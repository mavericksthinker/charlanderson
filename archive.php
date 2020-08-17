<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
    <section class="about__hero-section hero">
        <div class="blog-page__hero-section__image-blogs">
            <div class="hero-header">
                <?php the_archive_title( '<h1 class="header-text animate fadeInUp" style="color: white">', '</h1>' ); ?>
            </div>
        </div>
        <div class="header-scroll-for-more">
            <div class="header-scroll-for-more__container">
                <span class="header-scroll-for-more__line"></span>
                <span class="header-scroll-for-more__text"> Scroll for more</span>
            </div>
        </div>
    </section>

    <div class="wrapper blog-page main-body" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <div class="row">

            <main class="blog-site-main" id="main">

                <?php
                if ( have_posts() ) {
                    // Start the Loop.
                    while ( have_posts() ) {
                        the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'loop-templates/content', get_post_format() );
                    }
                } else
                    get_template_part( 'loop-templates/content', 'none' );

                ?>
                <div class="archive-section">
                    <h2 class="archive-section__header" style="margin: 2rem 0">Categories : </h2>
                    <ul class="archive-lists">
                        <?php wp_list_categories( array(
                            'title_li' => ''
                        ) ); ?>
                    </ul>
                </div>
            </main><!-- #main -->

            <!-- The pagination component -->
            <?php understrap_pagination(); ?>

        </div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
