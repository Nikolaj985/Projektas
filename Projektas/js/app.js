var slideIndex = 0;
showSlides(slideIndex);

// Thumbnail image controls
function currentSlide(n) {
  showSlides2((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("object");
  var selectors = document.getElementsByClassName("slider-selector");
  if (n > 2) {
    slideIndex = 0;
  } else {
    slideIndex = n;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < selectors.length; i++) {
    selectors[i].className = selectors[i].className.replace(" active", "");
  }
  for (i = 0; i < 4; i++) {
    slides[slideIndex * 4 + i].style.display = "block";
  }

  selectors[slideIndex].className += " active";
  setTimeout(function () {
    showSlides((a = slideIndex + 1));
  }, 5000);
}
function showSlides2(n) {
  var i;
  var slides = document.querySelectorAll(".object");
  var selectors = document.getElementsByClassName("slider-selector");
  if (n > 2) {
    slideIndex = 0;
  } else {
    slideIndex = n;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < selectors.length; i++) {
    selectors[i].className = selectors[i].className.replace(" active", "");
  }
  for (i = 0; i < 4; i++) {
    slides[slideIndex * 4 + i].style.display = "block";
  }

  selectors[slideIndex].className += " active";
}
