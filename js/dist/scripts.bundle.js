(() => {
  // js/modules/header.js
  var headerCursor = document.getElementById("headerCursor");
  var headerMenu = document.getElementById("headerMenu");
  var headerMenuBound = headerMenu.getBoundingClientRect();
  var headerCursorMoveHandler = (e) => {
    headerCursor.style.setProperty("--left", e.clientX - 14 + "px");
    headerCursor.style.setProperty("--top", e.clientY - 14 + "px");
  };
  var headerCursorReset = () => {
    headerCursor.style.setProperty("--left", headerMenuBound.x + headerMenuBound.width - 16 + "px");
    headerCursor.style.setProperty("--top", headerMenuBound.y + "px");
  };
  headerCursorReset();
  headerMenu.addEventListener("mousemove", headerCursorMoveHandler);
  headerMenu.addEventListener("mouseleave", headerCursorReset);
})();
