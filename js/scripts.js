// Event listener for the places dropdown
document.getElementById('places-dropdown').addEventListener('change', function () {
  var selectedOption = this.value;
  var cards = document.querySelectorAll('.card');

  // Loop through each card and apply sorting/filtering logic
  Array.from(cards).forEach(function (card) {
    var dataPlace = card.querySelector('.card-body').getAttribute('data-place');
    if (selectedOption === 'all' || dataPlace.toLowerCase() === selectedOption.toLowerCase()) {
      card.style.display = 'block';  // Show the card
    } else {
      card.style.display = 'none';   // Hide the card
    }
  });
});

// Event handler for the logo image to redirect to the homepage
document.getElementById('logo-image').addEventListener('click', redirectToHomepage);

function redirectToHomepage() {
  window.location.href = 'homepage.php';
}

// Beach images array
var beachImages = ['img/beach1.jpg', 'img/beach2.jpg', 'img/beach3.jpg'];

// Current image index
var currentIndex = 0;

// Function to update the image source
function updateImage() {
  $('.image-container img').attr('src', beachImages[currentIndex]);
}

// Function to navigate to the previous image
function navigateBack() {
  showSlide(currentIndex - 1);
}

// Function to navigate to the next image
function navigateNext() {
  showSlide(currentIndex + 1);
}

// Event handler for the back button
$('.btn-back').click(navigateBack);

// Event handler for the next button
$('.btn-next').click(navigateNext);

// Smooth scrolling for anchor links
$(document).ready(function () {
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 800, 'swing', function () {
      window.location.hash = target;
    });
  });
});

var slideIndex = 0;
var slides = document.getElementsByClassName("slide");

function showSlide(n) {
  if (n < 0) {
    slideIndex = slides.length - 1;
  } else if (n >= slides.length) {
    slideIndex = 0;
  } else {
    slideIndex = n;
  }

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex].style.display = "block";
}

showSlide(slideIndex);

// Scrollbar initialization for the popup sidebar
$(document).ready(function () {
  // Initialize the sidebar
  var sidebar = new SimpleBar(document.getElementById('modal-scroll'), {
    autoHide: false
  });
});




//Start of Content

// Event listener for the places dropdown---------------------------------------------------
document.getElementById('places-dropdown').addEventListener('change', function () {
  var selectedOption = this.value;
  var cards = document.querySelectorAll('.card');

  // Loop through each card and apply sorting/filtering logic
  Array.from(cards).forEach(function (card) {
    var dataPlace = card.querySelector('.card-body').getAttribute('data-place');
    if (selectedOption === 'all' || dataPlace.toLowerCase() === selectedOption.toLowerCase()) {
      card.style.display = 'block';  // Show the card
    } else {
      card.style.display = 'none';   // Hide the card
    }
  });
});


//POPUP FUNCTION-----------------------------------------------------------------------

