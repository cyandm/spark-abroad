import Swiper from 'swiper/bundle';

export const homeSliderSwiper = new Swiper('#homeSliderSwiper', {
  direction: 'vertical',
  mousewheel: true,

  keyboard: {
    enabled: true,
  },
});
