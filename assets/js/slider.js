const swiper = new Swiper(".welcome", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
});