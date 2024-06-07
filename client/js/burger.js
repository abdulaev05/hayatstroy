document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  const header = document.querySelector('.header');
  const navItems = document.querySelectorAll('.nav-item');

  const burgerToggle = () => {
    burger.classList.toggle('active');
  };
  const burgerClose = () => {
    setTimeout(() => {
      burger.classList.remove('active');
    }, 200);
  };
  const clickOutsideHeader = (e) => {
    const hasHeader = e.composedPath().includes(header);
    if (!hasHeader) {
      burgerClose();
    }
  };

  burger.addEventListener('click', burgerToggle);
  document.addEventListener('click', clickOutsideHeader);
  navItems.forEach((navItem) => {
    navItem.addEventListener('click', burgerClose);
  });
});
