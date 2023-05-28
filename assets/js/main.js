// PRELOADER

  window.addEventListener('load', function() {
    var preloader = document.getElementById('preloader');
    preloader.style.display = 'none';
  });

// FIXED NAV WHILE SCROLL

window.addEventListener("scroll", function() {
  var scroll = window.scrollY;
  if (scroll > 0) {
    document.getElementById("nav").classList.add("active_nav");
  } else {
    document.getElementById("nav").classList.remove("active_nav");
  }
});

//MOBILE MENU CODE

const menuToggle = document.querySelector(".toggle");
menuToggle.addEventListener('click',()=>{
  menuToggle.classList.toggle('active-toggle');
})


// active class on menu
const bar = document.querySelector(".toggle");
const menu = document.querySelector(".links");

bar.addEventListener('click', ()=>{
  menu.classList.toggle("active");
});


// menu close after clicking on link
const anchors = document.querySelectorAll('.links li a');
anchors.forEach(anchor => {
    anchor.addEventListener('click', ()=>{
      menu.classList.remove('active');
      menuToggle.classList.remove('active-toggle');
    })
});



// SLIDER
const slides = document.querySelectorAll('.slide');
const dotsContainer = document.querySelector('.dots-container');
const prevArrow = document.querySelector('.prev-arrow');
const nextArrow = document.querySelector('.next-arrow');

let currentSlide = 0;

function showSlide(n) {
  slides[currentSlide].classList.remove('active');
  dots[currentSlide].classList.remove('active');
  
  currentSlide = (n + slides.length) % slides.length;
  
  slides[currentSlide].classList.add('active');
  dots[currentSlide].classList.add('active');
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

function previousSlide() {
  showSlide(currentSlide - 1);
}

function createDots() {
  for (let i = 0; i < slides.length; i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.addEventListener('click', () => showSlide(i));
    dotsContainer.appendChild(dot);
  }
}

createDots();

const dots = document.querySelectorAll('.dot');
dots[currentSlide].classList.add('active');

prevArrow.addEventListener('click', previousSlide);
nextArrow.addEventListener('click', nextSlide);

// Auto play the slider
let autoPlayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds

// Pause auto play on arrow click or dot click
function pauseAutoPlay() {
  clearInterval(autoPlayInterval);
}

prevArrow.addEventListener('click', pauseAutoPlay);
nextArrow.addEventListener('click', pauseAutoPlay);

for (let i = 0; i < dots.length; i++) {
  dots[i].addEventListener('click', pauseAutoPlay);
}

// ACCORDION

document.addEventListener("DOMContentLoaded", function() {
  const accordionHeaders = document.querySelectorAll(".accordion-header");

  accordionHeaders.forEach(function(header) {
    header.addEventListener("click", function() {
      const accordionContent = this.nextElementSibling;

      this.classList.toggle("active");
      accordionContent.classList.toggle("show");

      if (accordionContent.classList.contains("show")) {
        accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
      } else {
        accordionContent.style.maxHeight = 0;
      }
    });
  });
});


// REWARD DYNAMIC COUNT

function animate(obj, initVal, lastVal, duration) {
  let startTime = null;

//get the current timestamp and assign it to the currentTime variable
let currentTime = Date.now();

//pass the current timestamp to the step function
const step = (currentTime ) => {

//if the start time is null, assign the current time to startTime
if (!startTime) {
  startTime = currentTime ;
}

//calculate the value to be used in calculating the number to be displayed
const progress = Math.min((currentTime - startTime)/ duration, 1);

//calculate what to be displayed using the value gotten above
obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

//checking to make sure the counter does not exceed the last value (lastVal)
if (progress < 1) {
  window.requestAnimationFrame(step);
} else {
     window.cancelAnimationFrame(window.requestAnimationFrame(step));
  }
};
//start animating
  window.requestAnimationFrame(step);
}
let text1 = document.getElementById('0101');
let text2 = document.getElementById('0102');
let text3 = document.getElementById('0103');
let text4 = document.getElementById('0104');
const load = () => {
  animate(text1, 0, 511, 7000);
  animate(text2, 0, 232, 7000);
  animate(text3, 100, 25, 7000);
  animate(text3, 150, 95, 7000);
  animate(text4, 200, 50, 7000);
}

// tesimonial slider
const slider = document.querySelector('.testi-slider');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let slideIndex = 0;
const slideWidth = slider.clientWidth;
prevBtn.addEventListener('click', () => {
  slideIndex--;
  slide();
});

nextBtn.addEventListener('click', () => {
  slideIndex++;
  slide();
});

function slide() {
  if (slideIndex < 0) {
    slideIndex = slider.children.length - 1;
  } else if (slideIndex >= slider.children.length) {
    slideIndex = 0;
  }
  
  slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
}
