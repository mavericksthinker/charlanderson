// $("#home-testimonial-slider").Cloud9Carousel( {
//     autoPlay: 0,
//     yRadius:-48,
//     bringToFront: true,
//     frontItemClass: 'active',
// } );
const formTextarea = document.querySelector('.form-textarea');
const popupContainer = document.querySelector('.popup__container');
const body = document.querySelector('body');
const popupContainerBlock = document.querySelector('.popup__container-block');
const popupContainerClose = document.querySelector('.popup__close-container');
if(formTextarea)
    formTextarea.value = '';
window.addEventListener('load', function(){
    var glider = document.querySelector('.glider');
    if(glider)
        new Glider(glider, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        })
});
function closePopupBox() {
    popupContainer.style.display = 'none';
    body.style.overflowY = 'auto';
}
$( document ).ready(function() {
    $('#downloadDeclaration').click(function () {
        popupContainer.style.display = 'flex';
        body.style.overflowY = 'hidden';
    });
    if(popupContainer)
        popupContainer.addEventListener('click', function () {
            closePopupBox();
        });
    if(popupContainerBlock)
        popupContainerBlock.addEventListener('click', function(e) {
            e.stopPropagation()
        });
    if(popupContainerClose)
        popupContainerClose.addEventListener('click', function () {
            closePopupBox();
        })
});
