const faqButtonHandler = document.querySelectorAll('.btn-faq-open-close');
const catFaqDesktopHandler = document.querySelectorAll('.cat-item-desktop');
const homeIsExist = document.querySelector('main.home');
const selectFaqHome = document.querySelector('.category-faq-mobile select');
const optionSelectFaqHome = document.querySelectorAll(
  '.category-faq-mobile select option'
);
const divContainerFaq = document.querySelectorAll(
  '.faq-category-content .container-faq-group'
);
if (homeIsExist) {
  faqButtonHandler.forEach((faqButton) => {
    faqButton.addEventListener('click', () => {
      faqButton.parentElement.parentElement.classList.toggle('active');
      console.log(faqButton.parentElement.parentElement);
    });
  });

  if (selectFaqHome && optionSelectFaqHome) {
    selectFaqHome.addEventListener('change', (select) => {
      optionSelectFaqHome.forEach((option) => {
        if (option.value === select.target.value) {
          console.log(option.value);
          divContainerFaq.forEach((div) => {
            div.classList.remove('show');

            if (option.value === div.dataset.tabname) div.classList.add('show');
          });
        }
      });
    });
  }
  catFaqDesktopHandler.forEach((catButton) => {
    catButton.addEventListener('click', () => {
      catFaqDesktopHandler.forEach((el) => el.classList.remove('current-cat'));
      catButton.classList.add('current-cat');
      divContainerFaq.forEach((div) => {
        div.classList.remove('show');

        if (catButton.dataset.tab === div.dataset.tab)
          div.classList.add('show');
      });
      setHeightProductHome();
    });
  });
}
