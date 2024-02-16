/* services */

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

/* faq */

const faqItemsList = document.querySelectorAll(".faq-item");

faqItemsList.forEach((item) => {
  const text = item.querySelector(".faq-item .text");
  const height = text.offsetHeight;
  item.addEventListener("click", () => {
    if (item.classList.contains("close")) {
      faqCloseAll();

      item.classList.toggle("close", false);
      text.style.height = `${height}px`;
    } else {
      faqCloseAll();
    }
  });
});

function faqCloseAll() {
  faqItemsList.forEach((item) => {
    item.classList.toggle("close", true);
  });
}

faqCloseAll();

/* animated number */

const animatedNumbers = document.querySelectorAll(".info-item span");

animatedNumbers.forEach((numberBlock) => {
  const targetNumber = Number(numberBlock.innerHTML);
  const width = numberBlock.offsetWidth;
  numberBlock.style.width = `${width}px`;
  let currentNumber = 0;

  const updateNumber = () => {
    numberBlock.textContent = currentNumber;
  };

  const animateNumber = () => {
    currentNumber += 1;

    updateNumber();

    if (currentNumber !== targetNumber) {
      if (targetNumber < 20) {
        setTimeout(() => {
          requestAnimationFrame(animateNumber);
        }, 100);
      } else if (targetNumber < 100) {
        setTimeout(() => {
          requestAnimationFrame(animateNumber);
        }, 50);
      } else {
        setTimeout(() => {
          requestAnimationFrame(animateNumber);
        }, 10);
      }
    }
  };

  animateNumber();
});
