import Swiper from 'swiper/bundle';

export const homeSliderSwiper = new Swiper('#homeSliderSwiper', {
  direction: 'vertical',
  mousewheel: true,
  speed: 1000,

  keyboard: {
    enabled: true,
  },
});
