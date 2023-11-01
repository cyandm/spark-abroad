import { overflowHidden as overflowHandlerSingleService } from '../modules/general';

const btnPopupVideoService = document.querySelector('.popup-btn-service');
const titlePopupService = document.querySelector('.title-service-popup');
const descriptionPopupService = document.querySelector(
  '.description-service-popup'
);
const popupService = document.querySelector('.popup-service');
const btnClosePopupService = document.querySelector('.btn-close-popup-service');
const singleServicePage = document.querySelector('main.single-service-page');
const videoSingleService = document.querySelector(
  '.container-video-popup-service video'
);

const playBtnGroupSingleService = document.querySelectorAll(
  '.play-btn-single-service'
);

const header = document.querySelector('header>div');
const section3SingleService = document.querySelector('.texts-section-3');

import Swiper from 'swiper';
export const swiperService = new Swiper('#swiperService', {
  slidesPerView: 1.85,
  spaceBetween: 1,
  navigation: {
    nextEl: '.swiper-button-next-service',
    prevEl: '.swiper-button-prev-service',
    clickable: true,
  },
  breakpoints: {
    1000: {
      slidesPerView: 3.5,
    },
  },
});
const setMarginRight = () => {
  console.log(section3SingleService, header.offsetLeft);
  section3SingleService.style.setProperty(
    'margin-right',
    header.offsetLeft + 'px'
  );
};

if (singleServicePage) {
  window.addEventListener('resize', () => setMarginRight());
  window.addEventListener('load', () => setMarginRight());
  console.log(header.offsetLeft + 'px');
  btnPopupVideoService.addEventListener('click', () => {
    popupService.classList.add('show');
    overflowHandlerSingleService();
    singleServicePage.classList.add('deactive');
    videoSingleService.src = btnPopupVideoService.dataset.video;
    videoSingleService.load();
    titlePopupService.innerHTML = btnPopupVideoService.dataset.title;
    descriptionPopupService.innerHTML =
      btnPopupVideoService.dataset.description;
  });

  playBtnGroupSingleService.forEach((playBtn) => {
    playBtn.addEventListener('click', () => {
      videoSingleService.src = playBtn.dataset.video;
      titlePopupService.innerHTML = playBtn.dataset.title;
      descriptionPopupService.innerHTML = playBtn.dataset.description;
      popupService.classList.add('show');
      overflowHandlerSingleService();
      singleServicePage.classList.add('deactive');
      video.load();
    });
  });

  btnClosePopupService.addEventListener('click', () => {
    popupService.classList.remove('show');
    overflowHandlerSingleService();
    singleServicePage.classList.remove('deactive');
  });
}
