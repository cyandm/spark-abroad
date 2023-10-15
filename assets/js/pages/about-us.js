import Swiper from "swiper";
export const swiperAboutUs = new Swiper(".swiper-about-us", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
const popupAboutUs = document.querySelector(".popup-about-us");
const playBtnGroup = document.querySelectorAll(".play-btn");

// playBtn.addEventListener("click", () => {
//   //playBtn.forEach(() => popupAboutUs.classList.add("show"));
// });

playBtnGroup.forEach((playBtn) => {
  playBtn.addEventListener("click", () => {
    popupAboutUs.classList.add("show");
  });
});
