<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article  <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="blog-page-container">

        <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

        <div class="blog-container blog-container__body">
            <header class="blog-page__header">
                <?php
                the_title(
                    sprintf( '<h2 class="blog-page__body"><a style="color: teal" href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                    '</a></h2>'
                );
                 ?>
                <?php if ( 'post' === get_post_type() ) : ?>

                    <div class="blog-page__body">
                        <?php understrap_posted_on(); ?>
                    </div><!-- .entry-meta -->

                <?php endif; ?>
            </header>

            <?php the_excerpt(); ?>

        </div>

    </div>
    <div class="blog-lists">

        <div class="entry-content">
            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->
    </div>
</article><!-- #post-## -->
