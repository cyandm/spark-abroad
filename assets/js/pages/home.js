import { homeSliderSwiper } from '../modules/swiper';
import { headerEl } from '../modules/header';

const headerBgChanger = () => {
  const activeIndex = homeSliderSwiper.realIndex;
  const activeSlide = homeSliderSwiper.slides[activeIndex];
  const haveBgPurple = activeSlide.classList.contains('bg_purple');

  headerEl.classList.toggle('bg_purple', haveBgPurple);
};

homeSliderSwiper.on('slideChange', headerBgChanger);
