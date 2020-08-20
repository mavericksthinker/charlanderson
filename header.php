<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Charla Anderson</title>
    <meta name="description" content="Speaker | Coach | Author" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://www.charlaanderson.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Charla Anderson" />
    <meta property="og:description" content="Speaker | Coach | Author" />
    <meta property="og:url" content="https://www.charlaanderson.com/" />
    <meta property="og:site_name" content="Charla Anderson" />
    <meta property="article:modified_time" content="2020-07-07T10:14:34+00:00" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/charla-fb-cover.jpg" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta property="og:image:width" content="2644" />
    <meta property="og:image:height" content="1486" />
    <link rel="shortcut icon"
          type="image/x-icon"
          href="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/charla-fb-cover.jpg"
    />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
    <div id="wptime-plugin-preloader" class="preloader"></div>
	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" class="navigation">

        <nav id="main-nav" class="main-navigation" aria-labelledby="main-nav-label">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img alt="Charla Anderson"
                         class="logo-image"
                         data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo.png">
                </a>
            </div>
            <div class="menu_items">
                    <div class="search_box">
                        <form action="<?php echo esc_url( home_url( '/' ) ); ?>"
                              role="search"
                              method="get"
                              autocomplete="off"
                              class="search-input__form"
                        >
                            <input type="text"
                                   name="s"
                                   spellcheck="false"
                                   id="search_box__input"
                                   class="search_box__input"
                                   placeholder="Search..."
                                   value="<?php if(isset($_GET['s'])){ echo $_GET['s']; }?>"
                            >
                            <svg class="search_box__icon search"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 56.966 56.966"
                            >
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"/>
                            </svg>
                            <svg class="search_box__icon close" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                                <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
                                c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
                                c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
                                L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
                                c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
                                c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
                                c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/>
                            </svg>
                        </form>
                    </div>
                <a class="button__call-to-action button__call-to-action__contact" href="<?php echo esc_url( home_url( '/contact-charla' ) ); ?>">Connect With Charla</a>

                <a class="button__call-to-action button__call-to-action__appointment" href="https://letsmeet.io/charlaanderson/30-min-fb-or-li-call">Set An Appointment </a>

                <div class="button__menu burger">
                    <div id="line" class="line1 color__teal"></div>
                    <div id="line" class="line2 color__teal"></div>
                    <div id="line" class="line3 color__teal"></div>
                </div>
            </div>
        </nav><!-- .site-navigation -->

        <div class="mega-menu">
            <img class="mega-menu__logo mega-menu__logo__translate-x"
                 src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="mega-menu__body">
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'container_class' => 'primary-menu-container',
                        'menu_class'      => 'menu-items',
                        'menu_id'         => 'main-menu'
                    ));
                ?>
            </div>
            <div class="mega-menu__footer mega-menu__footer__translate-y">
                <div class="social-media">
                    <a class="social-media__links" href="https://www.facebook.com/CharlaArnold" target="_blank">Facebook</a>
                    <a class="social-media__links" href="https://www.linkedin.com/in/charlaa/" target="_blank">LinkedIn</a>
                    <a class="social-media__links" href="https://www.youtube.com/channel/UCRqjTKOQS5ImL7k707TIAAg" target="_blank">YouTube</a>
                    <a class="social-media__links" href="https://twitter.com/charlaashow" target="_blank">Twitter</a>
                    <a class="social-media__links" href="https://www.instagram.com/theyeslady/" target="_blank">Instagram</a>
                    <a class="social-media__links" href="https://www.pinterest.com/CharlaAShow/" target="_blank">Pinterest</a>
                    <a class="social-media__links" href="mailto:Charla@CharlaAnderson.com" target="_blank">Email</a>
                </div>
            </div>
        </div>
	</header><!-- #wrapper-navbar end -->
    <div class="social-links">
        <div class="social-media-icons">
            <a class="social-media-icons__image"
               href="https://www.facebook.com/CharlaArnold"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/facebook.png"
                     alt="Facebook"
                >
            </a>
            <a class="social-media-icons__image"
               href="https://www.linkedin.com/in/charlaa/"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/linkedin.png"
                     alt="LinkedIn"
                >
            </a>
            <a class="social-media-icons__image"
               href="https://www.youtube.com/channel/UCRqjTKOQS5ImL7k707TIAAg"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/youtube.png"
                     alt="YouTube"
                >
            </a>
            <a class="social-media-icons__image"
               href="https://twitter.com/charlaashow"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/twitter.png"
                     alt="Twitter"
                >
            </a>
            <a class="social-media-icons__image"
               href="https://www.instagram.com/theyeslady/"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/instagram.png"
                     alt="Instagram"
                >
            </a>
            <a class="social-media-icons__image"
               href="https://www.pinterest.com/CharlaAShow/"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/pinterest.png"
                     alt="Pinterest"
                >
            </a>
            <a class="social-media-icons__image"
               href="mailto:Charla@CharlaAnderson.com"
               target="_blank"
            >
                <img data-src="<?php echo get_template_directory_uri(); ?>/img/social-media-icons/email.png"
                     alt="Email"
                >
            </a>
        </div>
    </div>

