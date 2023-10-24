import Swiper from "swiper";
import { Navigation, EffectFade } from "swiper/modules";

export const swiperAboutUs = new Swiper("#swiper-about-us", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

export const swiperAboutUsBgTop = new Swiper("#swiperAboutUsBgTop", {
  modules: [Navigation, EffectFade],
  direction: "horizontal",
  loop: true,
  speed: 1000,
  autoplay: {
    //auto play
    delay: 1000,
  },
  fadeEffect: {
    crossFade: true, // added(resolve the overlapping of the slides)
  },

  effect: "fade",
  navigation: {
    nextEl: ".btn-next-about-us",
    prevEl: ".btn-prev-about-us",
  },
});

const popupAboutUs = document.querySelector(".popup-about-us");
const playBtnGroup = document.querySelectorAll(".play-btn");

const header = document.querySelector("header>div");
const aboutUs = document.querySelector("main.about-us-page");
const titleImageSlider = document.querySelectorAll(".title-image-slider");
const btnPrevAboutUs = document.querySelector(".btn-prev-about-us");
const btnNextAboutUs = document.querySelector(".btn-next-about-us");

const btnClosePopup = document.querySelector(".btn-close-popup");

const video = document.querySelector(".video-popup-jobseeker");
const jobseekerName = document.querySelector(
  ".text-popup .jobseeker-name-popup"
);
const jobseekerDescription = document.querySelector(
  ".text-popup .jobseeker-description-popup"
);
const backgroundSlider = document.querySelector(".background-about-us");
const calcSpacer = document.querySelector(".calc-spacer");
const setMarginRight = () => {
  titleImageSlider.forEach((el) => {
    el.style.marginRight = header.offsetLeft + "px";
  });
  btnNextAboutUs.style.right = header.offsetLeft + 50 + "px";
  btnPrevAboutUs.style.right = header.offsetLeft + 110 + "px";
};
const swiperBtnPrevAboutUs = document.querySelector(".btn-prev-about-us");
const swiperBtnNextAboutUs = document.querySelector(".btn-next-about-us");
const informationSlider = document.querySelector(".title-image-slider");

const setSpacerHeight = () => {
  const height = backgroundSlider.clientHeight + "px";
  calcSpacer.style.marginTop = height;
};
const setNavigationPlace = () => {
  swiperBtnNextAboutUs.style.top = informationSlider.offsetTop + 20 + "px";
  swiperBtnPrevAboutUs.style.top = informationSlider.offsetTop + 20 + "px";
};

if (aboutUs) {
  setNavigationPlace();
  setSpacerHeight();
  setMarginRight();
  window.addEventListener("resize", () => {
    setMarginRight();
    setSpacerHeight();
    setNavigationPlace();
  });
  playBtnGroup.forEach((playBtn) => {
    playBtn.addEventListener("click", () => {
      const jobseekerVideo = playBtn.dataset.video;
      jobseekerName.innerHTML = playBtn.dataset.name;
      jobseekerDescription.innerHTML = playBtn.dataset.description;
      popupAboutUs.classList.add("show");
      video.src = jobseekerVideo;
      aboutUs.classList.add("deactive");
      video.load();
    });
  });

  btnClosePopup.addEventListener("click", () => {
    popupAboutUs.classList.remove("show");
    aboutUs.classList.remove("deactive");
  });
}
