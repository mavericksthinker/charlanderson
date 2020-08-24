<?php
/**
 * Template Name: Template Contact
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
    <main class="main-body">
        <section class="about__hero-section hero">
            <div class="choices__hero-section__image">
                <h1 class="header-text animate fadeInUp">Contact Charla</h1>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="contact-page-section1">
            <img class="contact-section__logo"
                 style="opacity: 0.04; z-index: 29"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="home-contact">
                <h2 class="contact-section__header heading animate">Let's Connect</h2>
                <div class="contact-section__body">
                    <figure class="contact-section__body-image">
                        <img class="contact-section__image"
                             data-src="<?php echo get_template_directory_uri(); ?>/img/contacts/logo1.png"
                             alt="Contact Charla"
                        >
                        <div class="footer-bio">
                            <h2 style="margin-bottom: .5rem">Charla Anderson</h2>
                            <p>817-761-0111</p>
                        </div>
                        <div class="footer-bio">
                            <p style="margin-bottom: .5rem">209 W  2nd St #225, Fort Worth, Texas 76102</p>
                            <p>Email :  Charla@CharlaAnderson.com</p>
                        </div>
                    </figure>
                    <div class="contact-page__content">
                        <div class="contact-form__container contact-form__container-contact-page">
                            <div role="form" class="wpcf7" style="margin: 0!important;width: 100%" id="wpcf7-f61-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                <form action="/contact-charla/#wpcf7-f61-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="61">
                                        <input type="hidden" name="_wpcf7_version" value="5.2">
                                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                        <input type="hidden" name="_wpcf7_recaptcha_response" value="">
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
                                               style="padding-right: 1rem!important;"
                                               size="40"
                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contact-input-form email-field"
                                               aria-required="true"
                                               aria-invalid="false"
                                               required
                                        >
                                        <label class="form-label">
                                            <span class="content-name">Email <span class=" star required"> *</span></span>
                                        </label>
                                        <span class="ajax-loader"></span>
                                    </div>
                                    <div class="form">
                                        <input type="text"
                                               name="your-subject"
                                               size="40"
                                               class="contact-input-form wpcf7-form-control wpcf7-text wpcf7-validates-as-		required"
                                               aria-required="true"
                                               aria-invalid="false"
                                               value=""
                                               required
                                        >
                                        <label class="form-label">
                                            <span class="content-name">Subject</span>
                                        </label>
                                    </div>
                                    <div class="form">
                                        <input type="text"
                                               name="zip-code"
                                               size="10"
                                               class="contact-input-form wpcf7-form-control wpcf7-text wpcf7-validates-as-		required"
                                               aria-required="true"
                                               aria-invalid="false"
                                               value=""
                                               required
                                        >
                                        <label class="form-label">
                                            <span class="content-name">ZipCode</span>
                                        </label>
                                    </div>
                                    <p><label class="your-message"> Message <span class="required"> *</span><br>
                                            <span class="wpcf7-form-control-wrap ">
                                              <textarea name="your-message"
                                                        cols="40"
                                                        rows="5"
                                                        style="border-radius: 20px; margin-top: .5rem"
                                                        class="form-textarea wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                        aria-required="true"
                                                        aria-invalid="false"
                                                        placeholder="Please feel free to leave your phone number in your message"
                                              >
                                              </textarea>
                                          </span>
                                        </label>
                                    </p>
                                    <span class="contact-form__content-footer">Privacy Ensured Always</span>
                                    <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                    <div class="wpcf7-form-control-wrap catcha_button_combo">
                                        <div data-sitekey="6LchZLoZAAAAACA6JjRudi4iivtSG2YCZzkNlKpa"
                                             class="wpcf7-form-control g-recaptcha wpcf7-recaptcha contact-recaptcha"
                                             id="contact-recaptcha">
                                            <div style="width: 304px; height: 78px;">
                                                <div>
                                                    <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LchZLoZAAAAACA6JjRudi4iivtSG2YCZzkNlKpa&amp;co=aHR0cDovL3dvcmRwcmVzcy50ZXN0Ojgw&amp;hl=en&amp;v=AFBwIe6h0oOL7MOVu88LHld-&amp;size=normal&amp;cb=we2p19q0ve00" width="304" height="78" role="presentation" name="a-5ov3uwgecy22" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                        <noscript>
                                            <div class="grecaptcha-noscript">
                                                <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LchZLoZAAAAACA6JjRudi4iivtSG2YCZzkNlKpa"
                                                        frameborder="0"
                                                        scrolling="no"
                                                        width="300"
                                                        height="430"
                                                >
                                                </iframe>
                                                <textarea name="g-recaptcha-response" rows="3" cols="40" placeholder="reCaptcha Response Here">
		                                        </textarea>
                                            </div>
                                        </noscript>
                                        <a class="about__button__read-more about__button__read-more__about catcha_button_combo__button"
                                           href="https://letsmeet.io/charlaanderson/30-min-discovery-call"
                                           target="_blank"
                                        >
                                            Set An Appointment
                                        </a>
                                    </div>
                                    <input type="submit"
                                           value="Submit"
                                           class="submit-button__contact-page"
                                           style='font-size: 1.3rem!important;font-family: "Apple Chancery", "Roboto", "Poppins", sans-serif'>
                                    <span class="ajax-loader"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="set-an-appointment__video-section">
            <div class="youtube">
<!--                <h6 class="section-youtube__header heading animate"-->
<!--                    style="color: #3387a2"-->
<!--                >-->
<!--                    Set An Appointment-->
<!--                </h6>-->
<!--                <iframe src="https://letsmeet.io/charlaanderson/30-min-discovery-call"-->
<!--                        loading="lazy"-->
<!--                        class="set-an-appointment"-->
<!--                        name="booking"-->
<!--                        scrolling="no"-->
<!--                        frameborder="0"-->
<!--                        marginheight="0px"-->
<!--                        marginwidth="0px"-->
<!--                        referrerpolicy="unsafe-url"-->
<!--                        allowfullscreen-->
<!--                >-->
<!--                </iframe>-->
            </div>
        </section>
    </main>
<?php
get_footer();
