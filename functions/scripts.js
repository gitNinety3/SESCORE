//Create function to select elements
const selectElement = (element) => document.querySelector(element);
//Open and close nav on click
selectElement('.menu-icon'), addEventListener('click', () => {
  selectElement('nav').classList.toggle('active');
});
