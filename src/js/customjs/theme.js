$("#home-testimonial-slider").Cloud9Carousel( {
    autoPlay: 0,
    yRadius:-48,
    bringToFront: true,
    frontItemClass: 'active',
} );
const formTextarea = document.querySelector('.form-textarea');
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
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        })
});
