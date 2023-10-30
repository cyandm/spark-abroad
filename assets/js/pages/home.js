import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/all';
import { Tween } from 'gsap/gsap-core';
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
gsap.registerPlugin(ScrollTrigger);

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

const ballSlide0 = document.querySelector('.slide-0 .ball');
const mainSliderWrapper = document.querySelector('.slider-1-3-wrapper');
const imgWrapper = document.querySelectorAll('.sidebar .img-wrapper');
const slide1_Buttons = document.querySelectorAll('.slide-1 .btn-wrapper a');
const mainBall = document.querySelector('.slider-1-3-wrapper .ball');
const home = document.querySelector('main.home');

const slide0_TL = gsap.timeline({});
const ballSlide0_TL = gsap.timeline();
const headerPurple_TL = gsap.timeline();
const headerPurple_RV = gsap.timeline();
const mainSlider_TL = gsap.timeline();
const slide1_TL = gsap.timeline();

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
    });
  });

  btnClosePopupHome.addEventListener('click', () => {
    popupHome.classList.remove('show');
    home.classList.remove('deactive');
  });
}
// ballSlide0_TL.from(ballSlide0, {
//   yPercent: -500,
//   scale: 3,
//   ease: 'bounce.out',
//   duration: 3,
// });
/*if (home) {
  ScrollTrigger.create({
    trigger: "body",
    start: "+1",
    end: "8000px",
    pin: true,
    animation: slide0_TL,
    scrub: 5,
  });
}
*/
headerPurple_TL.to('img.custom-logo', { filter: 'brightness(1)' });
headerPurple_TL.to('header li', { color: 'hsl(240, 67%, 17%)' });

headerPurple_RV.to('img.custom-logo', { filter: 'brightness(7)' });
headerPurple_RV.to('header li', { color: 'rgb(241, 241, 248)' });

mainSlider_TL.fromTo(
  mainSliderWrapper,
  { opacity: 0, pointerEvents: 'none' },
  { opacity: 1, pointerEvents: 'all' }
);

imgWrapper.forEach((el) => {
  mainSlider_TL.from(el, { y: -40, opacity: 0 });
});

/*------------------------------------------------Slide 1 TimeLine */
slide1_TL.from('.slide-1 .img-wrapper', { opacity: 0, y: 20 });
slide1_TL.fromTo('.slide-1 .h1', { y: 20, opacity: 0 }, { opacity: 1, y: 0 });
slide1_TL.from('.slide-1 .content span', { y: 20, opacity: 0 });
slide1_Buttons.forEach((btn) => {
  slide1_TL.from(btn, { opacity: 0, y: 60 });
});

/*------------------------------------------------Slide 2 TimeLine */

/*------------------------------------------------Slide 0 TimeLine */
slide0_TL.to(ballSlide0, { x: 240, y: 10, rotate: 720 });
slide0_TL.to(ballSlide0, {
  x: '+=600',
  y: '+=400',
  duration: 3,
  rotate: 360 * 6,
});
slide0_TL.to(ballSlide0, { scale: 35, duration: 3.1 });
slide0_TL.to(ballSlide0, { background: '#F0F0F8', duration: 0.5 });
slide0_TL.add(headerPurple_TL, '-=2');
slide0_TL.addLabel('endSlideZero');
slide0_TL.add(mainSlider_TL);
slide0_TL.from(mainBall, {
  opacity: 0,
  y: -120,
  ease: 'bounce.out',
  duration: 2,
});

slide0_TL.add(slide1_TL);

//Moving Ball
slide0_TL.to(mainBall, {
  x: '+=160',
  rotate: '+=720',
  duration: 2,
});
slide0_TL.to(mainBall, {
  y: '+=120',
  ease: 'bounce.out',
  duration: 2,
});
slide0_TL.to(mainBall, {
  x: '-=165',
  rotate: '-=720',
  duration: 2,
});
slide0_TL.to(mainBall, {
  y: '+=120',
  ease: 'bounce.out',
  duration: 2,
});

//Change Color Ball
slide0_TL.to(
  mainBall,
  {
    background:
      'radial-gradient(81.02% 126.66% at 26.6% 25.31%, #EC3232 0%, #D60000 28.53%, #8D0000 62.39%, #600 100%)',
  },
  '-=1'
);

//Slide 1 fade out
slide0_TL.to(
  '.slide-1',
  { y: -30, opacity: 0, pointerEvents: 'none' },
  '-=1.3'
);

//Moving Ball
slide0_TL.to(mainBall, {
  x: '+=165',
  rotate: '+=720',
  duration: 2,
  delay: '>0.5',
});

//Slide 2 Fade in
slide0_TL.from(
  '.slide-2',
  { y: 30, opacity: 0, pointerEvents: 'none' },
  '-=1.5'
);

//Moving Ball
slide0_TL.to(mainBall, {
  y: '+=130',
  ease: 'bounce.out',
  duration: 2,
});

//Slide 2 Fade Out
slide0_TL.to('.slide-2', { opacity: 0 });

//Change Color Ball
slide0_TL.to(
  mainBall,
  {
    background:
      'radial-gradient(145.63% 147.53% at 19.66% 4.52%, #8A88FF 0%, #514EDB 18.02%, #312FAA 33.86%, #1A1885 63.34%, #010037 100%)',
  },
  '-=1'
);

//Moving Ball
slide0_TL.to(mainBall, {
  x: '-=170',
  rotate: '-=720',
  duration: 2,
});
slide0_TL.to(mainBall, {
  y: '+=130',
  ease: 'bounce.out',
  duration: 2,
});

//Slide 3 Fade in
slide0_TL.from('.slide-3', { opacity: 0, y: 40 });

//Moving Ball
slide0_TL.to(mainBall, {
  x: '+=165',
  rotate: '+=720',
  duration: 2,
});
slide0_TL.to(mainBall, {
  y: '+=250',
  duration: 2,
});

//Slider-wrapper fade out
slide0_TL.to('.slider-1-3-wrapper *:not(.sidebar)', {
  opacity: 0,
  pointerEvents: 'none',
  duration: 2,
});

//Scale Ball
slide0_TL.to(
  mainBall,
  {
    zIndex: 1000,
    scale: 50,
    duration: 3.1,
    xPercent: -1500,
    yPercent: -2560,
  },
  '-=2.5'
);

//Change Header Color
slide0_TL.add(headerPurple_RV, '-=2');

slide0_TL.from('.slide-4 .content', {
  opacity: 0,
  y: 10,
  pointerEvents: 'none',
});
slide0_TL.from('.slide-4 .img-wrapper', {
  opacity: 0,
  y: 10,
  pointerEvents: 'none',
});

slide0_TL.to('.slide-4 .img-wrapper', {
  x: '+=400',
  y: '-=50',
  rotate: 5,
  duration: 3.5,
});

slide0_TL.to('.slide-4 .img-wrapper', {
  x: '+=480',
  y: '-=380',
  rotate: -3,
  duration: 3.5,
});
