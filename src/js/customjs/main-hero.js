var paramsHero1 = {
    container: document.getElementById('lottie'),
    renderer: 'svg',
    path : 'wp-content/themes/abwebsolutions/src/assets/hero1.json',
    loop: true,
    autoplay: true,
};

var paramsHero2 = {
    container: document.getElementById('lottie1'),
    renderer: 'svg',
    path : 'wp-content/themes/abwebsolutions/src/assets/hero2.json',
    loop: true,
    autoplay: true,
};
var paramsHero3 = {
    container: document.getElementById('lottie2'),
    renderer: 'svg',
    path : 'wp-content/themes/abwebsolutions/src/assets/hero3.json',
    loop: true,
    autoplay: true,
};

var anim, anim1, anim2;
if(document.location.pathname === '/') {
    anim = lottie.loadAnimation(paramsHero1);
    anim.setSpeed(.5);
    anim1 = lottie.loadAnimation(paramsHero2);
    anim2 = lottie.loadAnimation(paramsHero3);
}

