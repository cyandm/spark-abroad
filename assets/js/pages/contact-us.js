const header = document.querySelector("header>div");
const form = document.querySelector(".contact-us-form");
const contactUs = document.querySelector("main.contact-us");
const title = document.querySelector("main.contact-us>h1");
const descriptionPage = document.querySelector("main.contact-us>p");

if (contactUs) {
  const setMarginRight = () => {
    form.style.marginRight = header.offsetLeft + "px";
    title.style.marginRight = header.offsetLeft + "px";
    descriptionPage.style.marginRight = header.offsetLeft + "px";
  };

  setMarginRight();
  window.addEventListener("resize", () => setMarginRight());
}
