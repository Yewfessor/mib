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
