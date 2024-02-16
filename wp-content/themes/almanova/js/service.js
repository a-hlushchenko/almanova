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
