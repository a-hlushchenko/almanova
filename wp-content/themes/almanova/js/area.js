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
