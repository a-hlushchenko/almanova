let newsSwiper;

function initSwiperNews() {
  if (window.innerWidth < 768 && !newsSwiper) {
    newsSwiper = new Swiper("#news", {
      slidesPerView: 1,
      spaceBetween: 10,
      speed: 300,
      allowTouchMove: true,
      loop: true,

      navigation: {
        prevEl: ".swiper-button-prev.news",
        nextEl: ".swiper-button-next.news",
      },

      pagination: {
        el: ".swiper-pagination.news",
      },
    });
    newsSwiper.slideTo(1);
  } else if (window.innerWidth >= 768 && newsSwiper) {
    newsSwiper.destroy();
    newsSwiper = undefined;
  }
}

initSwiperNews();

window.addEventListener("resize", () => {
  initSwiperNews();
});
