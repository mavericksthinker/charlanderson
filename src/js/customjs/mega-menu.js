// Custom javascript for mega menu
const menuBarToggle = () => {
    const burger = document.querySelector('.button__menu');
    const line1 = document.querySelector('.line1');
    const line2 = document.querySelector('.line2');
    const megaMenu = document.querySelector('.mega-menu');
    const megaMenuLogo = document.querySelector('.mega-menu__logo');
    const logo = document.querySelector('.logo-image');
    const megaMenuFooter = document.querySelector('.mega-menu__footer');

    burger.addEventListener('click', () => {
        megaMenu.classList.toggle('mega-menu__full-width');
        burger.classList.toggle('burger');
        line1.classList.toggle('color__teal');
        line2.classList.toggle('color__teal');
        burger.classList.toggle('button__menu_transition');
        setTimeout(function () {
            logo.classList.toggle('bcg-white');
        }, 200);
        line1.classList.toggle('color__accent');
        line2.classList.toggle('color__accent');
        megaMenuLogo.classList.toggle('mega-menu__logo__translate-x');
        megaMenuFooter.classList.toggle('mega-menu__footer__translate-y');
    })
};

const app = () => {
    menuBarToggle();
};

$(document).ready(function(){
    // Add smooth scrolling to all links
    $("#downloadDeclaration").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 100, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

app();
