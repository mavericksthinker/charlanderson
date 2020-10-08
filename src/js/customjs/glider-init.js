window.addEventListener('load', function(){
    var gliderBlog = document.querySelector('.glider_blog');
    var glider = document.querySelector('.glider');
    var glider1 = document.querySelector('.glider1');
    var glider2 = document.querySelector('.glider2');
    var glider3 = document.querySelector('.glider3');
    var glider4 = document.querySelector('.glider4');
    if(gliderBlog != null)
        new Glider(gliderBlog, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '#glider-prev',
                next: '#glider-next'
            }
        });
    if(glider != null)
        new Glider(glider, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '#books-prev',
                next: '#books-next'
            }
        });
    if(glider1 != null)
    {
        new Glider(glider1, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '#product-prev',
                next: '#product-next'
            }
        });
    }
    if(glider2 != null){
        new Glider(glider2, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '#affiliates-prev',
                next: '#affiliates-next'
            }
        });
    }
    if(glider3 != null){
        new Glider(glider3, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '#faves-prev',
                next: '#faves-next'
            }
        });
    }
    if(glider4 != null){
        new Glider(glider4, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            rewind: true,
            arrows: {
                prev: '#charities-prev',
                next: '#charities-next'
            }
        });
    }
});
