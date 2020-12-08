const HumburgerElement = document.getElementsByClassName('humburger')[0];
const ulElement = document.getElementsByClassName('menutop')[0];
const breakPoint = 900;

const clickHandler = () => {
  const displayValue = getComputedStyle(ulElement).display;

  if (displayValue === 'block') {
    ulElement.style.display = 'none';
  }

  if (displayValue === 'none') {
    ulElement.style.display = 'block';
  }
};

document.addEventListener('DOMContentLoaded', () => {
  const width = window.innerWidth;

  if (width <= breakPoint) {
    HumburgerElement.addEventListener('click', clickHandler);
    ulElement.style.display = 'none';
  }
});

window.addEventListener('resize', () => {
  const width = window.innerWidth;

  if (width <= breakPoint) {
    HumburgerElement.addEventListener('click', clickHandler);
    ulElement.style.display = 'none';
  } else {
    HumburgerElement.removeEventListener('click', clickHandler);
    ulElement.style.display = 'block';
  }
});
