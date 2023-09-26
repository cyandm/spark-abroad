const headerCursor = document.getElementById('headerCursor');
const headerMenu = document.getElementById('headerMenu');
const headerMenuBound = headerMenu.getBoundingClientRect();
export const headerEl = document.querySelector('header');

const headerCursorMoveHandler = (e) => {
  headerCursor.style.setProperty('--left', e.clientX - 14 + 'px');
  headerCursor.style.setProperty('--top', e.clientY - 14 + 'px');
};

const headerCursorReset = () => {
  headerCursor.style.setProperty(
    '--left',
    headerMenuBound.x + headerMenuBound.width - 16 + 'px'
  );
  headerCursor.style.setProperty('--top', headerMenuBound.y + 'px');
};

const setHeaderHeight = () => {
  const root = document.querySelector(':root');

  const headerHeight = headerEl.clientHeight + 'px';
  root.style.setProperty('--header-height', headerHeight);
};

window.addEventListener('load', () => {
  headerCursorReset();
  setHeaderHeight();
  headerMenu.addEventListener('mousemove', headerCursorMoveHandler);
  headerMenu.addEventListener('mouseleave', headerCursorReset);
});

window.addEventListener('resize', () => {
  setHeaderHeight();
});
