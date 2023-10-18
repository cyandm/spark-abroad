import Swiper from "swiper";
export const swiperService = new Swiper(".swiper-service", {
  slidesPerView: 3.5,
  spaceBetween: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
