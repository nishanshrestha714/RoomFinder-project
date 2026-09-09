let index = 0;
const images = document.querySelectorAll('.slides img');
const totalImages = images.length;
const dotsContainer = document.querySelector('.dots');

// Create dots dynamically
images.forEach((_, i) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.addEventListener('click', () => showSlide(i));
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.dot');
dots[0].classList.add('active'); // Set first dot as active

function showSlide(i) {
    images[index].classList.remove('active');
    dots[index].classList.remove('active');
    index = (i + totalImages) % totalImages;
    images[index].classList.add('active');
    dots[index].classList.add('active');
}

document.querySelector('.next').addEventListener('click', () => showSlide(index + 1));
document.querySelector('.prev').addEventListener('click', () => showSlide(index - 1));
// Auto-slide every 7 seconds
setInterval(() => showSlide(index + 1), 7000); 
