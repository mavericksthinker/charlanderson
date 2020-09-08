<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="contact-section" id="downloadFreeGift">
    <img class="contact-section__logo"
         style="opacity: 0.04; z-index: 29"
         data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
         alt="Charla Anderson">
    <div class="home-contact">
        <h2 class="contact-section__header heading animate">Charla’s Declarations..</h2>
        <p class="contact-section__paragraph heading animate">For Living a Joyful Life Of Intentional Significance</p>
        <div class="contact-section__body">
            <figure>
                <img class="contact-section__image"
                     data-src="<?php echo get_template_directory_uri(); ?>/img/contacts/logo1.png"
                     alt="Contact Charla"
                >
            </figure>
            <div class="contact-form__content">
                <span class="contact-form__content-heading">Enter your email address below and get these powerful declarations to help you live a joyful life</span>
                <div class="contact-form__container">
                    <div role="form" class="wpcf7" style="margin: 0!important;" id="wpcf7-f60-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form action="/#wpcf7-f60-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="60">
                                <input type="hidden" name="_wpcf7_version" value="5.2">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f60-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                            </div>
                            <div class="form">
                                <input type="text"
                                       name="your-name"
                                       size="40"
                                       class="contact-input-form wpcf7-form-control wpcf7-text wpcf7-validates-as-		required"
                                       aria-required="true"
                                       aria-invalid="false"
                                       required
                                >
                                <label class="form-label">
                                    <span class="content-name">Name <span class="star required"> *</span></span>
                                </label>
                            </div>
                            <div class="form">
                                <input type="email"
                                       name="your-email"
                                       size="40"
                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contact-input-form email-field"
                                       aria-required="true"
                                       aria-invalid="false"
                                       required
                                >
                                <label class="form-label">
                                    <span class="content-name">Email <span class=" star required"> *</span></span>
                                </label>
                                <input type="submit"
                                       value="Download"
                                       class="wpcf7-form-control wpcf7-submit home-contact-submit"
                                >
                            </div>
                            <span class="wpcf7-form-control-wrap charlas-declaration-152">
                                        <input type="hidden"
                                               name="charlas-declaration-152"
                                               value="<?php echo get_template_directory_uri(); ?>/src/assets/charla-declaration.pdf"
                                               size="40"
                                               class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                               aria-invalid="false"
                                        >
                                    </span>
                            <div class="wpcf7-response-output"
                                 role="alert"
                                 aria-hidden="true"
                            >
                            </div>
                        </form>
                    </div>
                </div>
                <span class="contact-form__content-footer">Privacy Ensured Always</span>
            </div>
        </div>
    </div>
</div>
<footer class="footer-wrapper" id="wrapper-footer">
    <div class="footer">
<!--        <div class="footer-separator-top"></div>-->
<!--        <figure>-->
<!--            <img class="contact-section__image margin-bottom-3"-->
<!--                 data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/miscellaneous/logo.png"-->
<!--                 alt="Contact Charla"-->
<!--            >-->
<!--        </figure>-->
<!--        <a class="button__read-more button__read-more__about about-section__button"-->
<!--           href="--><?php //echo esc_url( home_url( '/contact-charla' ) ); ?><!--"-->
<!--        >-->
<!--            Stay In Touch-->
<!--        </a>-->
<!--        <div class="footer-nav">-->
<!--            --><?php
//            wp_nav_menu(array(
//                'theme_location'  => 'primary',
//                'container_class' => 'primary-menu-container',
//                'menu_class'      => 'menu-items',
//                'menu_id'         => 'main-menu'
//            ));
//            ?>
<!--        </div>-->
<!--        <div class="footer-bio">-->
<!--            <h2 style="margin-bottom: .5rem">Charla Anderson</h2>-->
<!--            <p>817-761-0111</p>-->
<!--        </div>-->
<!--        <div class="footer-bio">-->
<!--            <p style="margin-bottom: .5rem">209 W  2nd St #225, Fort Worth, Texas 76102</p>-->
<!--            <p>Email :  Charla@CharlaAnderson.com</p>-->
<!--        </div>-->
        <div class="footer-separator-bottom"></div>
    </div>
    <div class="footer-end">
        <div class="footer-social-links">
            <div class="footer-social-media-icons">
                <a class="footer-social-media-icons__image"
                   href="https://www.facebook.com/CharlaArnold"
                   target="_blank"
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
<!--                   href="https://www.instagram.com/theyeslady/"-->
<!--                   target="_blank"-->
<!--                >-->
<!--                    <img data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/social-media-icons/instagram.png"-->
<!--                         alt="Instagram"-->
<!--                    >-->
<!--                </a>-->
<!--                <a class="footer-social-media-icons__image"-->
<!--                   href="https://www.pinterest.com/CharlaAShow/"-->
<!--                   target="_blank"-->
<!--                >-->
<!--                    <img data-src="--><?php //echo get_template_directory_uri(); ?><!--/img/social-media-icons/pinterest.png"-->
<!--                         alt="Pinterest"-->
<!--                    >-->
<!--                </a>-->
                <a class="footer-social-media-icons__image"
                   href="mailto:Charla@CharlaAnderson.com"
                   target="_blank"
                >
                    <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/email.png"
                         alt="Email"
                    >
                </a>
            </div>
        </div>
        <span class="powered-by">2020. Charla Anderson ©
            <a class="footer-links"
               href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"
            >
                Terms
            </a>
            |
            <a class="footer-links"
                        href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"
            > Earning Disclaimer
            </a>
            | Powered by AB Web solutions</span>
    </div>
</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

