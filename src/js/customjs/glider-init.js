window.addEventListener('load', function(){
    var glider = document.querySelector('.glider');
    var glider1 = document.querySelector('.glider1');
    var glider2 = document.querySelector('.glider2');
    var glider3 = document.querySelector('.glider3');
    var glider4 = document.querySelector('.glider4');
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
        });
    if(glider1){
        new Glider(glider1, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    }
    if(glider2){
        new Glider(glider2, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    }
    if(glider3){
        new Glider(glider3, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    }
    if(glider4){
        new Glider(glider4, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    }
});
