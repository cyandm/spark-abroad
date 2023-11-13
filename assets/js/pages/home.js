import { overflowHidden as overflowHandlerHome } from '../modules/general';

import Swiper from 'swiper';

export const swiperService = new Swiper('.swiper-jobseeker-home', {
  slidesPerView: 1.25,
  breakpoints: {
    400: {
      slidesPerView: 1.5,
    },
    700: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3.5,
    },
    1100: {
      slidesPerView: 4,
    },
  },
});

const popupHome = document.querySelector('.popup-home');
const playBtnGroupHome = document.querySelectorAll('.play-btn');
const btnClosePopupHome = document.querySelector('.btn-close-popup');

const videoPopupHome = document.querySelector('.video-popup-jobseeker');
const jobseekerNamePopupHome = document.querySelector(
  '.text-popup .jobseeker-name-popup'
);
const jobseekerDescriptionPopupHome = document.querySelector(
  '.text-popup .jobseeker-description-popup'
);

const home = document.querySelector('main.home');

if (home) {
  playBtnGroupHome.forEach((playBtn) => {
    playBtn.addEventListener('click', () => {
      const jobseekerVideoHome = playBtn.dataset.video;
      jobseekerNamePopupHome.innerHTML = playBtn.dataset.name;
      jobseekerDescriptionPopupHome.innerHTML = playBtn.dataset.description;
      popupHome.classList.add('show');
      videoPopupHome.src = jobseekerVideoHome;
      home.classList.add('deactive');
      videoPopupHome.load();
      overflowHandlerHome();
    });
  });

  btnClosePopupHome.addEventListener('click', () => {
    popupHome.classList.remove('show');
    home.classList.remove('deactive');
    overflowHandlerHome();
  });
}
