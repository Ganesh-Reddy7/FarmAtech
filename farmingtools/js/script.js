var swiper = new Swiper(".home-slider", {
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop:true,
});