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

const btnClosePopup = document.querySelector(".btn-close-popup");

const video = document.querySelector(".video-popup-jobseeker");
const jobseekerName = document.querySelector(
  ".text-popup .jobseeker-name-popup"
);
const jobseekerDescription = document.querySelector(
  ".text-popup .jobseeker-description-popup"
);
const spacer = document.querySelector(".spacer");
const backgroundSlider = document.querySelector(".background-about-us");
const calcSpacer = document.querySelector(".calc-spacer");
const setMarginRight = () => {
  titleImageSlider.style.marginRight = header.offsetLeft + "px";
  btnNextAboutUs.style.right = header.offsetLeft + 20 + "px";
  btnPrevAboutUs.style.right = header.offsetLeft + 80 + "px";
};
//const swiperBtnPrevAboutUs = document.querySelector(".swiper-button-prev");
//const swiperBtnNextAboutUs = document.querySelector(".swiper-button-next");
//const informationSlider = document.querySelector(".title-image-slider");

const setSpacerHeight = () => {
  const height = backgroundSlider.clientHeight + "px";
  calcSpacer.style.marginTop = height;
};
/*const setNavigationPlace = () => {
  swiperBtnNextAboutUs.style.top = informationSlider.offsetTop + 20 + "px";
};
*/
if (aboutUs) {
  //setNavigationPlace();
  setSpacerHeight();
  setMarginRight();
  window.addEventListener("resize", () => {
    setMarginRight();
    setSpacerHeight();
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
