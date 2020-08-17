const heroSection = document.querySelector('.hero');
const headerText = document.querySelector('.header-text');
const navigation = document.querySelector('.navigation');
const headings = document.querySelectorAll('.heading');
const slidesLeft = document.querySelectorAll('.slide-left');
const slidesRight = document.querySelectorAll('.slide-right');
const lazyLoadImages = document.querySelectorAll("[data-src]");
const headerSocialLinks = document.querySelectorAll(".social-links");
const footer = document.querySelector(".footer-wrapper");

const sectionObserverOptions = {
    threshold : 0,
    rootMargin: "-50px 0px 0px 0px"
};

const headingObserverOptions = {
    threshold : .3,
};

const imageObserverOptions = {
    threshold: 0,
};

const footerObserverOptions = {
    threshold : .6
};

const preloadImages= (img) => {
    const src = img.getAttribute("data-src");
    if(!src)
        return false;
    img.src = src;
    return true;
};

const sectionObserver =new IntersectionObserver(function(entries, sectionObserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            navigation.classList.add('navigation-scrolled');
            if(headerText)
                headerText.style.display = 'none';
        } else{
            navigation.classList.remove('navigation-scrolled');
            if(headerText)
                headerText.style.display = 'block';
        }
    })
}, sectionObserverOptions);

const slideRightObserver =new IntersectionObserver(function(entries, slideRightObserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting)
            return false;
        entry.target.classList.add('fadeInRight');
        slideRightObserver.unobserve(entry.target)
    })
}, headingObserverOptions);

const slideLeftObserver =new IntersectionObserver(function(entries, slideLeftObserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting)
            return false;
        entry.target.classList.add('fadeInLeft');
        slideLeftObserver.unobserve(entry.target)
    })
}, headingObserverOptions);

const headingObserver =new IntersectionObserver(function(entries, headingObserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting)
            return false;
        entry.target.classList.add('fadeInUp');
        headingObserver.unobserve(entry.target)
    })
}, headingObserverOptions);

const imageObserver =new IntersectionObserver(function(entries, imageObserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting)
            return false;
        preloadImages(entry.target);
        imageObserver.unobserve(entry.target)
    })
}, imageObserverOptions);

const footerObserver =new IntersectionObserver(function(entries, imageObserver) {
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            if(headerSocialLinks)
                headerSocialLinks.forEach(headerSocialLink => {
                    headerSocialLink.style.display = 'block';
                })
        }else{
            if(headerSocialLinks)
                headerSocialLinks.forEach(headerSocialLink => {
                    headerSocialLink.style.display = 'none';
                })
        }
    })
}, footerObserverOptions);

if(heroSection)
    sectionObserver.observe(heroSection);

if(slidesLeft)
    slidesLeft.forEach(slideLeft => {
        slideLeftObserver.observe(slideLeft);
    });

if(slidesRight)
    slidesRight.forEach(slideRight => {
        slideRightObserver.observe(slideRight);
    });
if(headings)
    headings.forEach(heading => {
        headingObserver.observe(heading);
    });

if(lazyLoadImages)
    lazyLoadImages.forEach((image) => {
        imageObserver.observe(image);
    });

if(footerObserver)
    footerObserver.observe(footer);
