const headerEl = document.querySelector("header");
const headerCursor = document.getElementById("headerCursor");
const headerMenu = document.getElementById("headerMenu");
const headerMenuBound = headerMenu.getBoundingClientRect();
const hamburgerMenuHandler = document.querySelector(".icon-menu-mobile");
const menuMobile = document.querySelector(".menu-mobile-clicked");
const menuMobileCloseHandler = document.querySelector(".icon-close-mobile");
const menuMobileSearchHandler = document.querySelector(".icon-search-mobile");
const searchSection = document.querySelector(".search-mobile-clicked");
const bgColorSearchMobile = document.querySelector(".bg-color-search-mobile");
const mainScrollDeactive = document.querySelector("main");

const headerCursorMoveHandler = (e) => {
  headerCursor.style.setProperty("--left", e.clientX - 14 + "px");
  headerCursor.style.setProperty("--top", e.clientY - 14 + "px");
};

const headerCursorReset = () => {
  headerCursor.style.setProperty(
    "--left",
    headerMenuBound.x + headerMenuBound.width - 16 + "px"
  );
  headerCursor.style.setProperty("--top", headerMenuBound.y + "px");
};

const setHeaderHeight = () => {
  const root = document.querySelector(":root");

  const headerHeight = headerEl.clientHeight + "px";
  root.style.setProperty("--header-height", headerHeight);
};

window.addEventListener("load", () => {
  headerCursorReset();
  setHeaderHeight();
  headerMenu.addEventListener("mousemove", headerCursorMoveHandler);
  headerMenu.addEventListener("mouseleave", headerCursorReset);
});

window.addEventListener("resize", () => {
  setHeaderHeight();
});

hamburgerMenuHandler.addEventListener("click", () => {
  menuMobile.classList.add("is-open");
});

menuMobileCloseHandler.addEventListener("click", () => {
  menuMobile.classList.remove("is-open");
});
menuMobileSearchHandler.addEventListener("click", () => {
  searchSection.classList.add("search-is-open");
});
bgColorSearchMobile.addEventListener("click", () => {
  searchSection.classList.remove("search-is-open");
});

export { headerEl };
