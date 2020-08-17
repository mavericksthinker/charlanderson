<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

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

    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>


    <div class="entry-content" style='font-family: "Apple Chancery", "Roboto", "Poppins", sans-serif'>

		<?php the_content(); ?><?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

<!--		--><?php //understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
