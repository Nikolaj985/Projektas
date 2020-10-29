"use strict";
var slideIndex = 0;
var button = false;
showSlides(slideIndex, false);

// Function called from slider selectors
function currentSlide(n) {
  showSlides((slideIndex = n), true);
}

//Main slider function
function showSlides(n, button) {
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
  if (!button) {
    setTimeout(function () {
      showSlides(slideIndex + 1, false);
    }, 5000);
  }
}
