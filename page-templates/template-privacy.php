<?php
/**
 * Template Name: Template Privacy
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
        <section class="privacy-page-section hero">
            <div class="about__hero-section__image">
                <h1 class="header-text animate fadeInUp">Privacy Policy</h1>
            </div>
            <div class="header-scroll-for-more">
                <div class="header-scroll-for-more__container">
                    <span class="header-scroll-for-more__line"></span>
                    <span class="header-scroll-for-more__text"> Scroll for more</span>
                </div>
            </div>
        </section>
        <section class="privacy-page__section1">
            <img class="mega-menu__logo"
                 style="opacity: 0.04; z-index: 29"
                 data-src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/logo_background.png"
                 alt="Charla Anderson">
            <div class="privacy-policy__body">
                <div class="privacy-page-body">
                    <p class="privacy-page__paragraph-section header animate">
                        I, Charla Anderson, believe in win/win/win.  I believe in doing the right thing and taking the High Road at all times.
                        All this legal jargon (that no one reads) is for people that don’t understand that most of us want to leave the world
                        a better place.  I choose to honor my word that I will never intentionally compromise your information.
                        If you have any issues with me or my site, please just reach out to me.  Let’s work together on it, shake on it,
                        and stay friends.  Smiles, Charla 🤠
                    </p>
                    <h2 class="privacy-page__paragraph-section bold header animate">Privacy Policy of <span class="website_url">CharlaAnderson.com</span></h2>
                    <p class="privacy-page__paragraph-section header animate">At <span class="website_name">CharlaA.com, LLC</span>, we collect and manage user data according to the following Privacy Policy.</p>

                    <h2 class="privacy-page__paragraph-section bold header animate">Data Collected</h2>

                    <p class="privacy-page__paragraph-section header animate">We collect information you provide directly to us. For example, we collect information when you create an account, subscribe, participate in any interactive features of our services, fill out a form, request customer support or otherwise communicate with us. The types of information we may collect include your name, email address, postal address, credit card information and other contact or identifying information you choose to provide.</p>

                    <p class="privacy-page__paragraph-section header animate">We collect anonymous data from every visitor of the Website to monitor traffic and fix bugs. For example, we collect information like web requests, the data sent in response to such requests, the Internet Protocol address, the browser type, the browser language, and a timestamp for the request.</p>

                    <p class="privacy-page__paragraph-section header animate">We also use various technologies to collect information, and this may include sending cookies to your computer. Cookies are small data files stored on your hard drive or in your device memory that helps us to improve our services and your experience, see which areas and features of our services are popular and count visits. We may also collect information using web beacons (also known as "tracking pixels"). Web beacons are electronic images that may be used in our services or emails and to track count visits or understand usage and campaign effectiveness.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Use of the Data</h1>

                    <p class="privacy-page__paragraph-section header animate">We only use your personal information to provide you the <span class="website_name">CharlaA.com, LLC</span> services or to communicate with you about the Website or the services. Our Privacy Policy was created with the help of the <a href="https://www.privacy-policy-template.com">Privacy Policy Template</a> and the <a href="https://www.termsandcondiitionssample.com">Terms and Conditions Template</a>.</p>

                    <p class="privacy-page__paragraph-section header animate">We employ industry standard techniques to protect against unauthorized access of data about you that we store, including personal information.</p>

                    <p class="privacy-page__paragraph-section header animate">We do not share personal information you have provided to us without your consent, unless:</p>

                    <ul class="privacy-page__paragraph-section header animate">

                        <li>Doing so is appropriate to carry out your own request</li>

                        <li>We believe it's needed to enforce our legal agreements or that is legally required</li>

                        <li>We believe it's needed to detect, prevent or address fraud, security or technical issues</li>

                    </ul>

                    <h1 class="privacy-page__paragraph-section header animate bold">Sharing of Data</h1>

                    <p class="privacy-page__paragraph-section header animate">We don't share your personal information with third parties. Aggregated, anonymized data is periodically transmitted to external services to help us improve the Website and service.</p>

                    <p class="privacy-page__paragraph-section header animate">We may allow third parties to provide analytics services. These third parties may use cookies, web beacons and other technologies to collect information about your use of the services and other websites, including your IP address, web browser, pages viewed, time spent on pages, links clicked and conversion information.</p>

                    <p class="privacy-page__paragraph-section header animate">We also use social buttons provided by services like Twitter, Google+, LinkedIn and Facebook. Your use of these third party services is entirely optional. We are not responsible for the privacy policies and/or practices of these third party services, and you are responsible for reading and understanding those third party services' privacy policies.</p>

                </div>
            </div>
        </section>
        <section class="privacy-page__section2">
            <div class="privacy-policy__body">
                <div class="privacy-page-body">
                    <h1 class="privacy-page__paragraph-section header animate bold">Cookies</h1>

                    <p class="privacy-page__paragraph-section header animate">We may use cookies on our site to remember your preferences.</p>

                    <p class="privacy-page__paragraph-section header animate">For more general information on cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/">"What Are Cookies"</a>.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Opt-Out, Communication Preferences</h1>

                    <p class="privacy-page__paragraph-section header animate">You may modify your communication preferences and/or opt-out from specific communications at any time. Please specify and adjust your preferences.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Security</h1>

                    <p class="privacy-page__paragraph-section header animate">We take reasonable steps to protect personally identifiable information from loss, misuse, and unauthorized access, disclosure, alteration, or destruction. But, you should keep in mind that no Internet transmission is ever completely secure or error-free. In particular, email sent to or from the Sites may not be secure.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">About Children</h1>

                    <p class="privacy-page__paragraph-section header animate">The Website is not intended for children under the age of 13. We do not knowingly collect personally identifiable information via the Website from visitors in this age group.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Changes to the Privacy Policy</h1>

                    <p class="privacy-page__paragraph-section header animate">We may amend this Privacy Policy from time to time. Use of information we collect now is subject to the Privacy Policy in effect at the time such information is used.</p>

                    <p class="privacy-page__paragraph-section header animate">
                        If we make major changes in the way we collect or use information, we will notify you by posting an announcement on the Website or sending you an email.
                    </p>

                    <h2 class="privacy-page__paragraph-section header animate bold">Terms and Conditions of <span class="website_url">CharlaAnderson.com</span></h2>

                    <p class="privacy-page__paragraph-section header animate">The following terms and conditions (collectively, these "Terms and Conditions") apply to your use of <span class="website_url">CharlaAnderson.com</span>, including any content, functionality and services offered on or via <span class="website_url">CharlaAnderson.com</span> (the "Website").</p>

                    <p class="privacy-page__paragraph-section header animate">
                        Please read the Terms and Conditions carefully before you start using <span class="website_name">CharlaA.com, LLC</span>, because by using the Website you accept and agree to be bound and abide by these Terms and Conditions.
                        NEED TO INSERT A DATEv
                    </p>

                    <p class="privacy-page__paragraph-section header animate">These Terms and Conditions are effective as of <span class="date">[DATE]</span>. We expressly reserve the right to change these Terms and Conditions from time to time without notice to you. You acknowledge and agree that it is your responsibility to review this Website and these Terms and Conditions from time to time and to familiarize yourself with any modifications. Your continued use of this Website after such modifications will constitute acknowledgement of the modified Terms and Conditions and agreement to abide and be bound by the modified Terms and Conditions. These Terms and Conditions were created by <a href="https://www.termsconditionstemplate.net">Terms and Conditions Template</a> and the <a href="https://www.terms-conditions-template.com">Terms & Conditions Template</a>.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Conduct on Website</h1>

                    <p class="privacy-page__paragraph-section header animate">Your use of the Website is subject to all applicable laws and regulations, and you are solely responsible for the substance of your communications through the Website.</p>

                    <p class="privacy-page__paragraph-section header animate">By posting information in or otherwise using any communications service, chat room, message board, newsgroup, software library, or other interactive service that may be available to you on or through this Website, you agree that you will not upload, share, post, or otherwise distribute or facilitate distribution of any content — including text, communications, software, images, sounds, data, or other information — that:</p>

                    <ul class="privacy-page__paragraph-section header animate">

                        <li>Is unlawful, threatening, abusive, harassing, defamatory, libelous, deceptive, fraudulent, invasive of another's privacy, tortious, contains explicit or graphic descriptions or accounts of sexual acts (including but not limited to sexual language of a violent or threatening nature directed at another individual or group of individuals), or otherwise violates our rules or policies</li>

                        <li>Victimizes, harasses, degrades, or intimidates an individual or group of individuals on the basis of religion, gender, sexual orientation, race, ethnicity, age, or disability</li>

                        <li>Infringes on any patent, trademark, trade secret, copyright, right of publicity, or other proprietary right of any party</li>

                        <li>Constitutes unauthorized or unsolicited advertising, junk or bulk email (also known as "spamming"), chain letters, any other form of unauthorized solicitation, or any form of lottery or gambling</li>

                        <li>Contains software viruses or any other computer code, files, or programs that are designed or intended to disrupt, damage, or limit the functioning of any software, hardware, or telecommunications equipment or to damage or obtain unauthorized access to any data or other information of any third party</li>

                        <li>Impersonates any person or entity, including any of our employees or representatives</li>

                    </ul>

                    <p class="privacy-page__paragraph-section header animate">We neither endorse nor assume any liability for the contents of any material uploaded or submitted by third party users of the Website. We generally do not pre-screen, monitor, or edit the content posted by users of communications services, chat rooms, message boards, newsgroups, software libraries, or other interactive services that may be available on or through this Website.</p>

                    <p class="privacy-page__paragraph-section header animate">However, we and our agents have the right at their sole discretion to remove any content that, in our judgment, does not comply with these Terms of Use and any other rules of user conduct for our Website, or is otherwise harmful, objectionable, or inaccurate. We are not responsible for any failure or delay in removing such content. You hereby consent to such removal and waive any claim against us arising out of such removal of content.</p>

                    <p class="privacy-page__paragraph-section header animate">You agree that we may at any time, and at our sole discretion, terminate your membership, account, or other affiliation with our site without prior notice to you for violating any of the above provisions.</p>

                    <p class="privacy-page__paragraph-section header animate">In addition, you acknowledge that we will cooperate fully with investigations of violations of systems or network security at other sites, including cooperating with law enforcement authorities in investigating suspected criminal violations.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Intellectual Property</h1>

                    <p class="privacy-page__paragraph-section header animate">By accepting these Terms and Conditions, you acknowledge and agree that all content presented to you on this Website is protected by copyrights, trademarks, service marks, patents or other proprietary rights and laws, and is the sole property of <span class="website_name">CharlaA.com, LLC</span>.</p>

                    <p class="privacy-page__paragraph-section header animate">You are only permitted to use the content as expressly authorized by us or the specific content provider. Except for a single copy made for personal use only, you may not copy, reproduce, modify, republish, upload, post, transmit, or distribute any documents or information from this Website in any form or by any means without prior written permission from us or the specific content provider, and you are solely responsible for obtaining permission before reusing any copyrighted material that is available on this Website.</p>
                </div>
            </div>
        </section>
        <section class="privacy-page__section3">
            <div class="privacy-policy__body">
                <div class="privacy-page-body">
                    <h1 class="privacy-page__paragraph-section header animate bold">Third Party Websites</h1>

                    <p class="privacy-page__paragraph-section header animate">This Website may link you to other sites on the Internet or otherwise include references to information, documents, software, materials and/or services provided by other parties. These websites may contain information or material that some people may find inappropriate or offensive.</p>

                    <p class="privacy-page__paragraph-section header animate">These other websites and parties are not under our control, and you acknowledge that we are not responsible for the accuracy, copyright compliance, legality, decency, or any other aspect of the content of such sites, nor are we responsible for errors or omissions in any references to other parties or their products and services. The inclusion of such a link or reference is provided merely as a convenience and does not imply endorsement of, or association with, the Website or party by us, or any warranty of any kind, either express or implied.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Disclaimer of Warranties, Limitations of Liability and Indemnification</h1>

                    <p class="privacy-page__paragraph-section header animate">Your use of <span class="website_name">CharlaA.com, LLC</span> is at your sole risk. The Website is provided "as is" and "as available". We disclaim all warranties of any kind, express or implied, including, without limitation, the warranties of merchantability, fitness for a particular purpose and non-infringement.</p>

                    <p class="privacy-page__paragraph-section header animate">We are not liable for damages, direct or consequential, resulting from your use of the Website, and you agree to defend, indemnify and hold us harmless from any claims, losses, liability costs and expenses (including but not limites to attorney's fees) arising from your violation of any third-party's rights. You acknowledge that you have only a limited, non-exclusive, nontransferable license to use the Website. Because the Website is not error or bug free, you agree that you will use it carefully and avoid using it ways which might result in any loss of your or any third party's property or information.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Term and termination</h1>

                    <p class="privacy-page__paragraph-section header animate">This Terms and Conditions will become effective in relation to you when you create a <span class="website_name">CharlaA.com, LLC</span> account or when you start using the <span class="website_name">CharlaA.com, LLC</span> and will remain effective until terminated by you or by us. </p>

                    <p class="privacy-page__paragraph-section header animate"><span class="website_name">CharlaA.com, LLC</span> reserves the right to terminate this Terms and Conditions or suspend your account at any time in case of unauthorized, or suspected unauthorized use of the Website whether in contravention of this Terms and Conditions or otherwise. If <span class="website_name">CharlaA.com, LLC</span> terminates this Terms and Conditions, or suspends your  account for any of the reasons set out in this section, <span class="website_name">CharlaA.com, LLC</span> shall have no liability or responsibility to you.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Assignment</h1>

                    <p class="privacy-page__paragraph-section header animate">
                        <span>CharlaA.com, LLC</span>
                        may assign this Terms and Conditions or any part of it without restrictions.
                        You may not assign this Terms and Conditions or any part of it to any third party.
                    </p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Governing Law</h1>

                    <p class="privacy-page__paragraph-section header animate">These Terms and Conditions and any dispute or claim arising out of, or related to them, shall be governed by and construed in accordance with the internal laws of the <span class="country">us</span> without giving effect to any choice or conflict of law provision or rule.</p>

                    <p class="privacy-page__paragraph-section header animate">
                        Any legal suit, action or proceeding arising out of, or related to, these Terms of Service or the Website shall be instituted exclusively in the federal courts of <span class="country">us</span>.
                    </p>
                </div>
            </div>
        </section>
        <section class="privacy-page__section4">
            <div class="privacy-policy__body">
                <div class="privacy-page-body">

                    <h2 class="privacy-page__paragraph-section header animate bold">Cookies Policy of <span class="website_url">CharlaAnderson.com</span></h2>

                    <p class="privacy-page__paragraph-section header animate">This website, <span class="website_url">CharlaAnderson.com</span> (the "Website"), is operated by <span class="website_name">CharlaA.com, LLC</span>.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">What are cookies?</h1>

                    <p class="privacy-page__paragraph-section header animate">Cookies are a small text files that are stored in your web browser that allows <span class="website_name">CharlaA.com, LLC</span> or a third party to recognize you. Cookies can be used to collect, store and share bits of information about your activities across websites, including on <span class="website_name">CharlaA.com, LLC</span> website. This Cookies Policy was created by <a href="https://www.cookiespolicytemplate.com">GDPR Cookies Policy Template Generator</a> and the <a href="https://www.termsandcondiitionssample.com">Terms and Conditions Template</a> for <span class="website_url">CharlaAnderson.com</span></p>

                    <p class="privacy-page__paragraph-section header animate">Cookies might be used for the following purposes:</p>

                    <ul class="privacy-page__paragraph-section header animate">

                        <li>To enable certain functions</li>

                        <li>To provide analytics</li>

                        <li>To store your preferences</li>

                        <li>To enable ad delivery and behavioral advertising</li>

                    </ul>

                    <p class="privacy-page__paragraph-section header animate"><span class="website_name">CharlaA.com, LLC</span> uses both session cookies and persistent cookies.</p>

                    <p class="privacy-page__paragraph-section header animate">A session cookie is used to identify a particular visit to our Website. These cookies expire after a short time, or when you close your web browser after using our Website. We use these cookies to identify you during a single browsing session, such as when you log into our Website.</p>

                    <p class="privacy-page__paragraph-section header animate">A persistent cookie will remain on your devices for a set period of time specified in the cookie. We use these cookies where we need to identify you over a longer period of time. For example, we would use a persistent cookie if you asked that we keep you signed in.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">How do third parties use cookies on the <span class="website_name">CharlaA.com, LLC</span> Website?</h1>

                    <p class="privacy-page__paragraph-section header animate">Third party companies like analytics companies and ad networks generally use cookies to collect user information on an anonymous basis. They may use that information to build a profile of your activities on the <span class="website_name">CharlaA.com, LLC</span> Website and other websites that you've visited.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">What are your cookies options?</h1>

                    <p class="privacy-page__paragraph-section header animate">If you don't like the idea of cookies or certain types of cookies, you can change your browser's settings to delete cookies that have already been set and to not accept new cookies. To learn more about how to do this, visit the help pages of your browser.</p>

                    <p class="privacy-page__paragraph-section header animate">Please note, however, that if you delete cookies or do not accept them, you might not be able to use all of the features we offer, you may not be able to store your preferences, and some of our pages might not display properly.</p>

                    <h1 class="privacy-page__paragraph-section header animate bold">Where can I find more information about cookies?</h1>

                    <p class="privacy-page__paragraph-section header animate">
                        To learn more about cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/">"What Are Cookies"</a>.
                    </p>

                    <h2 class="privacy-page__paragraph-section header animate bold">Website Disclaimer of <span class="website_url">CharlaAnderson.com</span></h2>

                    <p class="privacy-page__paragraph-section header animate">Thank you for visiting <span class="website_name">CharlaA.com, LLC</span>.</p>

                    <p class="privacy-page__paragraph-section header animate">Please note that the information provided on <span class="website_url">CharlaAnderson.com</span> and other related web properties are for informational purposes only.</p>

                    <p class="privacy-page__paragraph-section header animate">The information is provided by <span class="website_url">CharlaAnderson.com</span> and whilst we endeavor to keep the information up-to-date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p>

                    <p class="privacy-page__paragraph-section header animate">In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of or in connection with the use of this website.</p>

                    <p class="privacy-page__paragraph-section header animate">Through this website you are able to link to other websites which are not under the control of <span class="website_url">CharlaAnderson.com</span>. We have no control over the nature, content and availability of those websites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p>

                    <p class="privacy-page__paragraph-section header animate">Every effort is made to keep the website up and running smoothly. However, <span class="website_name">CharlaA.com, LLC</span> takes no responsibility for and will not be liable for the website being temporarily unavailable due to technical issues beyond our control.</p>

                    <p class="privacy-page__paragraph-section header animate">Our Website is provided by <span class="website_name">CharlaA.com, LLC</span> on an "AS IS" basis. This Website Disclaimer was created by <a href="https://www.disclaimer-template.com">Disclaimer Template Generator</a> and the <a href="https://www.termsandcondiitionssample.com">Terms and Conditions Template</a> for <span class="website_url">CharlaAnderson.com</span>.</p>

                    <p class="privacy-page__paragraph-section header animate"><span class="website_name">CharlaA.com, LLC</span> makes no representations or warranties of any kind, express or implied as to the operation of the site, the information, content, materials or products included on the site.</p>

                    <p class="privacy-page__paragraph-section header animate">To the full extent permissible by applicable law, <span class="website_name">CharlaA.com, LLC</span> disclaims all warranties, express or implied, including, but not limited to, the implied warranties and/or conditions of merchantability or satisfactory quality and fitness for a particular purpose and non-infringement.</p>

                    <p class="privacy-page__paragraph-section header animate"><span class="website_name">CharlaA.com, LLC</span> will not be liable for any damages of any kind arising from the use of the site, including, but not limited to direct, indirect, incidental, punitive and consequential damages.</p>

                    <p class="privacy-page__paragraph-section header animate"
                       style="margin-bottom: 4rem"
                    ><span class="website_name">CharlaA.com, LLC</span> does not warrant that the site, or the server that makes it available, is free of viruses or other harmful components.</p>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
