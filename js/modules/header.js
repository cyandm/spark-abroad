const headerCursor = document.getElementById('headerCursor');
const headerMenu = document.getElementById('headerMenu');
const headerMenuBound = headerMenu.getBoundingClientRect();

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

headerCursorReset();
headerMenu.addEventListener('mousemove', headerCursorMoveHandler);
headerMenu.addEventListener('mouseleave', headerCursorReset);