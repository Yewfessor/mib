let randomSec = () => {
    return Math.floor(Math.random() * 3000) + 2000;
}

var swiper1 = new Swiper('.swiper-container.box1', {
    autoplay: {
        delay: randomSec(),
        disableOnInteraction: false,
    },
    loop: true,
    grabCursor: true,
});
var swiper2 = new Swiper('.swiper-container.box2', {
    autoplay: {
        delay: randomSec(),
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
});
var swiper3 = new Swiper('.swiper-container.box3', {
    autoplay: {
        delay: randomSec(),
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
});

var swiperProduct = new Swiper('.swiper-container.product-slide', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true,
    mousewheel: true,
    breakpoints: {
        375: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1600: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
        1900: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});
