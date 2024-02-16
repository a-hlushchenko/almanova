// wow

wow = new WOW({
  boxClass: "wow",
  animateClass: "animated",
  offset: 0,
  mobile: true,
  live: true,
});
wow.init();

document.addEventListener("DOMContentLoaded", function () {
  $(".phoneInput").inputmask("mask", { mask: "+99 (999) 999-99-99" });
  $(".dateInput").inputmask("mask", { mask: "99.99.9999" });
  $(".timeInput").inputmask("mask", { mask: "99:99" });
});

// scroll to top

const scrollTop = document.querySelector(".scroll-top");
// const fixed = document.getElementById("fixed");

// let isDisplay = false;

// setInterval(() => {
//   if (scrollY >= window.innerHeight && !isDisplay) {
//     fixed.classList.add("active");
//     isDisplay = true;
//   } else if (scrollY < window.innerHeight && isDisplay) {
//     fixed.classList.remove("active");
//     isDisplay = false;
//   }
// }, 500);

scrollTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

// menu

const menu = document.getElementById("menu");
const openMenu = document.getElementById("open-menu");
const langList = document.getElementById("lang-list");

const menuListener = (event) => {
  if (!event.target.closest("#menu") && !event.target.closest("#open-menu")) {
    openMenu.click();
  }
};

openMenu.addEventListener("click", () => {
  menu.classList.toggle("active");
  openMenu.classList.toggle("active");
  langList.classList.toggle("menu-open");

  if (menu.classList.contains("active")) {
    document.body.style.overflow = "hidden";
    setTimeout(() => window.addEventListener("click", menuListener));
  } else {
    document.body.style.overflow = "auto";
    window.removeEventListener("click", menuListener);
  }
});

// popup form

const popupForm = document.getElementById("popup-form");
const popupFormOpenList = document.querySelectorAll(".popup-form-open");
const popupFormCloseButton = popupForm.querySelector(".popup-form-close");
const popupFormListener = (event) => {
  if (!event.target.closest(".popup-form")) {
    popupFormCloseButton.click();
  }
};

popupFormOpenList.forEach((button) => {
  button.addEventListener("click", () => {
    popupForm.classList.add("active");
    document.body.style.overflow = "hidden";
    setTimeout(() => window.addEventListener("click", popupFormListener));
  });
});

popupFormCloseButton.addEventListener("click", () => {
  popupForm.classList.remove("active");
  document.body.style.overflow = "auto";
  window.removeEventListener("click", popupFormListener);
});

// popup thank

const popupThank = document.getElementById("popup-thank");
const popupThankCloseButton = popupThank.querySelector(".popup-form-close");
const popupThankListener = (event) => {
  if (!event.target.closest(".popup-thank")) {
    popupThankCloseButton.click();
  }
};

function popupThankOpen() {
  popupThank.classList.add("active");
  document.body.style.overflow = "hidden";
  setTimeout(() => window.addEventListener("click", popupThankListener));
}

popupThankCloseButton.addEventListener("click", () => {
  popupThank.classList.remove("active");
  document.body.style.overflow = "auto";
  window.removeEventListener("click", popupThankListener);
});

// fixed header

const header = document.querySelector(".header-wrapper");

window.addEventListener("scroll", () => {
  if (scrollY > 0) {
    header.classList.add("fixed");
  } else {
    header.classList.remove("fixed");
  }
});

/* wp */

document.querySelectorAll(`.form-button`).forEach((el) => {
  el.addEventListener("click", () => {
    el.style.setProperty("pointer-events", "none");
    setTimeout(() => {
      el.style.setProperty("pointer-events", "auto");
    }, 2000);
  });
});

window.addEventListener(
  "wpcf7mailsent",
  () => {
    popupFormCloseButton.click();
    popupThankOpen();
  },
  false
);
