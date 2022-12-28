let currentIndex = 0;
let images = [];

function updateSlideshow() {
  // make a request to the PHP endpoint
  fetch('./uploads-ep.php')
    .then(response => response.json())
    .then(data => {
      images = data;

      // remove any existing images from the slideshow
      const slideshow = document.getElementById('slideshow');
      while (slideshow.firstChild) {
        slideshow.removeChild(slideshow.firstChild);
      }

      // display the newest image
      const image = images[currentIndex];
      const imageElement = document.createElement('img');
      imageElement.src = image;
      imageElement.classList.add('animate__animated', 'animate__jackInTheBox');
      slideshow.appendChild(imageElement);

      // remove the blur when the image finishes loading
      imageElement.addEventListener('load', () => {
        imageElement.classList.add('loaded');
      });

      // increment the index
        currentIndex = (currentIndex + 1) % images.length;
      });
      }

// update the slideshow every 5 seconds
setInterval(updateSlideshow, 5000);
