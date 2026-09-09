// script.js
let currentIndex = 0; // Start at the first image
const slides = document.querySelectorAll('.image-slider .slide');

// Show the first image initially
slides[currentIndex].classList.add('active');

// Function to show the next image
function nextSlide() {
    slides[currentIndex].classList.remove('active'); // Hide the current image

    // Move to the next image
    currentIndex = (currentIndex + 1) % slides.length; // Loop back to the first image when we reach the last one

    slides[currentIndex].classList.add('active'); // Show the new image
}

// Automatically change the slide every 3 seconds
setInterval(nextSlide, 3000);
