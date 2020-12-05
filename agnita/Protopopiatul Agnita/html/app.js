const h1 = document.getElementsByTagName('hmenuBurger')[0];
const ul = document.getElementsByTagName('ul')[0];
const breakPoint = 500;

const clickHandler = () => {
  const displayValue = getComputedStyle(ul).display;

  if (displayValue === 'block') {
    ul.style.display = 'none';
  }

  if (displayValue === 'none') {
    ul.style.display = 'block';
  }
};

document.addEventListener('DOMContentLoaded', () => {
  const width = window.innerWidth;

  if (width <= breakPoint) {
    menuBurger.addEventListener('click', clickHandler);
    ul.style.display = 'none';
  }
});

window.addEventListener('resize', () => {
  const width = window.innerWidth;

  if (width <= breakPoint) {
    menuBurger.addEventListener('click', clickHandler);
    ul.style.display = 'none';
  } else {
    menuBurger.removeEventListener('click', clickHandler);
    ul.style.display = 'block';
  }
});
