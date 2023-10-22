import Swiper from "swiper";

export const swiperAboutUs = new Swiper(".swiper-about-us", {
  spaceBetween: 16,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

export const swiperAboutUsBgTop = new Swiper("#swiperAboutUsBgTop", {
  direction: "horizontal",
  loop: true,

  speed: 2000,
  effect: "fade",
  autoplay: {
    //auto play
    delay: 2000,
  },
  fadeEffect: {
    // added
    crossFade: true, // added(resolve the overlapping of the slides)
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    clickable: true,
  },
});

const popupAboutUs = document.querySelector(".popup-about-us");
const playBtnGroup = document.querySelectorAll(".play-btn");

const header = document.querySelector("header>div");
const aboutUs = document.querySelector("main.about-us-page");
const titleImageSlider = document.querySelector(".title-image-slider");
const btnPrevAboutUs = document.querySelector(".btn-prev-about-us");
const btnNextAboutUs = document.querySelector(".btn-next-about-us");

if (aboutUs) {
  const setMarginRight = () => {
    titleImageSlider.style.marginRight = header.offsetLeft + "px";
    btnNextAboutUs.style.right = header.offsetLeft + 20 + "px";
    btnPrevAboutUs.style.right = header.offsetLeft + 80 + "px";
  };

  setMarginRight();
  window.addEventListener("resize", () => setMarginRight());
}

playBtnGroup.forEach((playBtn) => {
  playBtn.addEventListener("click", () => {
    popupAboutUs.classList.add("show");
  });
});
