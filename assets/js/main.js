//Selectors
let header = document.querySelector('.header');
let hamburgerMenu = document.querySelector('.hamburger-menu');

window.addEventListener('scroll', function () {
    let windowPosition = window.scrollY > 400;
    header.classList.toggle('active', windowPosition)
})


hamburgerMenu.onclick = () => {
    header.classList.toggle('menu-open')
}




//Swiper Slide

let randomSec = () => {
    return Math.floor(Math.random() * 3000) + 2000;
}

var swiperHero = new Swiper('.swiper-container.hero-slide', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: 'true',
    effect: 'fade',
    speed: 1500,
});
var swiperUnderHero1 = new Swiper('.swiper-container.underhero-slide1', {
    autoplay: {
        delay: randomSec(),
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
});
var swiperUnderHero2 = new Swiper('.swiper-container.underhero-slide2', {
    autoplay: {
        delay: randomSec(),
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
});
var swiperUnderHero3 = new Swiper('.swiper-container.underhero-slide3', {
    autoplay: {
        delay: randomSec(),
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
});