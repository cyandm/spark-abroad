const selectHandler = document.querySelector(".category-blog select");
const optionSelect = document.querySelectorAll(".category-blog select option");

const selectSingleBlogHandler = document.querySelector(
  ".category-single-blog select"
);
const optionSingleBlog = document.querySelectorAll(
  ".category-single-blog select option"
);

if (selectHandler && optionSelect) {
  selectHandler.addEventListener("change", (e) => {
    optionSelect.forEach((el) => {
      if (el.value === e.target.value) {
        window.location = el.dataset.uri;
      }
    });
  });
}

if (selectSingleBlogHandler && optionSingleBlog) {
  selectSingleBlogHandler.addEventListener("change", (e) => {
    optionSingleBlog.forEach((el) => {
      if (el.value === e.target.value) {
        window.location = el.dataset.uri;
      }
    });
  });
}
