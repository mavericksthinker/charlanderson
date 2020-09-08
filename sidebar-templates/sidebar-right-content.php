<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="right-sidebar">
    <picture>
        <source srcset="<?php print get_avatar_url($user->ID, ['size' => '140']); ?>" media="(min-width: 992px)"/>
        <img src="<?php print get_avatar_url($user->ID, ['size' => '140']); ?>"
             loading="lazy"
             alt="<?php echo get_the_author(); ?>"
             style="border-radius: 70px"
        >
    </picture>
    <span class="mb-3 mt-5"><?php echo get_the_author_posts_link(); ?></span>

    <span class="mb-2" style="color: teal">Email : <?php echo get_the_author_meta( 'email', $author_id ); ?></span>

    <a class="mb-3" href="<?php echo get_the_author_meta( 'url', $author_id );?>">Website : <?php echo get_the_author_meta( 'url', $author_id ); ?></a>

    <span class="mb-3" style="font-weight: bold">About the Author : </span>

    <span class="mb-2"><?php echo get_the_author_meta( 'description', $author_id ); ?>

    <div class="footer-social-links mt-5" style="width: 100%; justify-content: center">
        <div class="footer-social-media-icons">
                <a class="footer-social-media-icons__image"
                   href="https://www.facebook.com/CharlaArnold"
                   target="_blank"
                   style="margin-left: 0"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/facebook.png"
                         alt="Facebook"
                    >
                </a>
                <a class="footer-social-media-icons__image"
                   href="https://www.linkedin.com/in/charlaa/"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/linkedin.png"
                         alt="LinkedIn"
                    >
                </a>
                <a class="footer-social-media-icons__image"
                   href="https://www.youtube.com/channel/UCRqjTKOQS5ImL7k707TIAAg"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/youtube.png"
                         alt="YouTube"
                    >
                </a>
<!--                <a class="footer-social-media-icons__image"-->
<!--                   href="https://twitter.com/charlaashow"-->
<!--                   target="_blank"-->
<!--                >-->
<!--                    <img data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/social-media-icons/twitter.png"-->
<!--                         alt="Twitter"-->
<!--                    >-->
<!--                </a>-->
<!--                <a class="footer-social-media-icons__image"-->
<!--                   href="https://twitter.com/charlaashow"-->
<!--                   target="_blank"-->
<!--                >-->
<!--                    <img data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/social-media-icons/instagram.png"-->
<!--                         alt="Instagram"-->
<!--                    >-->
<!--                </a>-->
<!--                <a class="footer-social-media-icons__image"-->
<!--                   href="https://twitter.com/charlaashow"-->
<!--                   target="_blank"-->
<!--                >-->
<!--                    <img data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/social-media-icons/pinterest.png"-->
<!--                         alt="Pinterest"-->
<!--                    >-->
<!--                </a>-->
                <a class="footer-social-media-icons__image"
                   href="https://twitter.com/charlaashow"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/email.png"
                         alt="Email"
                    >
                </a>
            </div>
    </div>
    <div class="mt-5 sidebar-widget">
        <?php dynamic_sidebar( 'right-sidebar' );?>
    </div>
</div>
