import WaveSurfer from 'wavesurfer.js';
const wave = document.getElementsByClassName('waveform');

const formatTime = (seconds) => {
  const minutes = Math.floor(seconds / 60);
  const secondsRemainder = Math.round(seconds) % 60;
  const paddedSeconds = `0${secondsRemainder}`.slice(-2);
  return `${minutes}:${paddedSeconds}`;
};

const durationEl = document.querySelector('#time');
if (wave) {
  for (let i = 0; i < wave.length; i++) {
    const wavesurfer = WaveSurfer.create({
      container: wave[i],
      height: 30,
      width: 180,
      splitChannels: false,
      normalize: true,
      waveColor: '#8887BF',
      progressColor: '#1A1885',
      cursorWidth: 0,
      barHeight: 0.8,
      barWidth: 2,
      barGap: 5,
      fillParent: true,
      autoplay: false,
      interact: true,
      hideScrollbar: false,
      autoScroll: false,
      autoCenter: true,
      mediaControls: null,
      sampleRate: 4000,
      url: wave[i].getAttribute('data-audio'),
    });

    wavesurfer.on(
      'decode',
      (duration) => (durationEl.textContent = formatTime(duration))
    );

    let play = wave[i].querySelector('i');
    play.addEventListener('click', function () {
      wavesurfer.playPause();
      let icon_class = play.getAttribute('class');
      if (icon_class == 'icon-play') {
        play.classList.remove('icon-play');
        play.classList.add('icon-pause');
      }
      if (icon_class == 'icon-pause') {
        play.classList.remove('icon-pause');
        play.classList.add('icon-play');
      }
    });
  }
}
