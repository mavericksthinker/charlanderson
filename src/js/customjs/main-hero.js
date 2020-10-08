const paramsHero1 = {
    container: document.getElementById('lottie'),
    renderer: 'svg',
    loop: true,
    path : 'wp-content/themes/abwebsolutions/src/assets/hero1.json',
    autoplay: true,
};

const paramsHero2 = {
    container: document.getElementById('lottie1'),
    renderer: 'svg',
    path : 'wp-content/themes/abwebsolutions/src/assets/coach.json',
    loop: true,
    autoplay: true,
};
const paramsHero3 = {
    container: document.getElementById('lottie2'),
    renderer: 'svg',
    path : 'wp-content/themes/abwebsolutions/src/assets/speaker.json',
    loop: true,
    autoplay: true,
};

if(document.location.pathname === '/') {

    let anim, anim1, anim2;

    anim = lottie.loadAnimation(paramsHero1);
    anim.setSpeed(.5);
    anim1 = lottie.loadAnimation(paramsHero2);
    anim2 = lottie.loadAnimation(paramsHero3);
}

