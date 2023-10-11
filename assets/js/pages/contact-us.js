const header = document.querySelector("header");
const form = document.querySelector(".contact-us-form");
const contactUs = document.querySelector("main.contact-us");
if (contactUs) {
  const setMarginRight = () => {
    form.style.marginRight = header.offsetLeft + "px";
  };

  setMarginRight();
  window.addEventListener("resize", () => setMarginRight());
}
