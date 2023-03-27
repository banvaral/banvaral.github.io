// Get the lightbox container
var lightbox = document.querySelector('.lightbox-container');

// Get the slider element
var slider = document.querySelector('.lightbox-slider');

// Get the previous and next buttons
var prevBtn = document.querySelector('.prev-slide');
var nextBtn = document.querySelector('.next-slide');

// Get all the images in the slider
var slides = document.querySelectorAll('.lightbox-slider img');

// Set the initial slide index to 0
var currentSlide = 0;

// Add click event listeners to the previous and next buttons
prevBtn.addEventListener('click', function() {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  slideTo(currentSlide);
});

nextBtn.addEventListener('click', function() {
  currentSlide++;
  if (currentSlide > slides.length - 1) {
    currentSlide = 0;
  }
  slideTo(currentSlide);
});

// Add click event listener to the lightbox background
lightbox.addEventListener('click', function(event) {
  if (event.target == this) {
    closeLightbox();
  }
});

// Add event listener to the document for key events
document.addEventListener
