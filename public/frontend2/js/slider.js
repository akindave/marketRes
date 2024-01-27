let slideIndex = 0;
const indicators = document.querySelectorAll('.indicator');

showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    indicators[i].classList.remove('indicator-active')
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  indicators[slideIndex-1].classList.add('indicator-active')
  setTimeout(showSlides, 2000);
}