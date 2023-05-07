const elements = document.querySelectorAll('.elementor-element.e-con-boxed');
const screenWidth = window.innerWidth;

if (screenWidth <= 768) {
  elements.forEach(element => {
    element.classList.add('table-price');
    // element.style.marginBottom = '143px';
    element.style.flexDirection = 'column';
  });
}