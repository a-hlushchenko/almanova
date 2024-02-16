let reviewsSwiper;
let newsSwiper;

const reviewsSwiperWrapper = document.querySelector("#reviews .swiper-wrapper");

function initSwiperReviews() {
  if (window.innerWidth < 768 && !reviewsSwiper) {
    reviewsSwiper = new Swiper("#reviews", {
      slidesPerView: 1,
      spaceBetween: 10,
      speed: 300,
      allowTouchMove: true,
      loop: true,

      navigation: {
        prevEl: ".swiper-button-prev.reviews",
        nextEl: ".swiper-button-next.reviews",
      },

      pagination: {
        el: ".swiper-pagination.reviews",
      },
    });

    reviewsSwiper.slideTo(1);
  } else if (window.innerWidth >= 768 && reviewsSwiper) {
    reviewsSwiper.destroy();
    reviewsSwiper = undefined;
  }
}

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

initSwiperReviews();
initSwiperNews();

window.addEventListener("resize", () => {
  initSwiperReviews();
  initSwiperNews();
});

// services hover

const servicesItems = document.querySelectorAll(".services-item");
let timeoutId = null;

servicesItems.forEach((item) => {
  const itemHeight = item.offsetHeight;
  item.style.height = `${itemHeight}px`;

  item.addEventListener("mouseenter", () => {
    if (timeoutId) {
      clearTimeout(timeoutId);
    }
    timeoutId = setTimeout(() => {
      item.querySelector(".text.hover").style.display = "-webkit-box";
    }, 150);
  });

  item.addEventListener("mouseleave", () => {
    item.querySelector(".text.hover").style.display = "none";
    clearTimeout(timeoutId);
    timeoutId = null;
  });
});

// advantage slider

const cards = document.querySelectorAll(".slide-advantage");
cards[0].classList.add("active-slide");
cards[1].classList.add("next-slide");
cards[2].classList.add("prev-slide");

const slider = document.querySelector(".slider-advantage");

let startX;

if (slider) {
  slider.addEventListener("touchstart", function (e) {
    startX = e.touches[0].clientX;
  });

  slider.addEventListener("touchend", function (e) {
    const endX = e.changedTouches[0].clientX;
    const deltaX = endX - startX;

    if (deltaX > 0) {
      cards.forEach((card) => {
        if (card.classList.contains("prev-slide")) {
          card.classList.remove("prev-slide");
          card.classList.add("active-slide");
        } else if (card.classList.contains("active-slide")) {
          card.classList.remove("active-slide");
          card.classList.add("next-slide");
        } else if (card.classList.contains("next-slide")) {
          card.classList.remove("next-slide");
          card.classList.add("prev-slide");
        }
      });
    }
    if (deltaX < 0) {
      cards.forEach((card) => {
        if (card.classList.contains("prev-slide")) {
          card.classList.remove("prev-slide");
          card.classList.add("next-slide");
        } else if (card.classList.contains("active-slide")) {
          card.classList.remove("active-slide");
          card.classList.add("prev-slide");
        } else if (card.classList.contains("next-slide")) {
          card.classList.remove("next-slide");
          card.classList.add("active-slide");
        }
      });
    }
  });
}
