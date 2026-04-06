const carouselWhy = document.getElementById('carousel-why');
const nextWhy = document.getElementById('next-why');
const prevWhy = document.getElementById('prev-why');

let scrollAmountWhy = 0;
const cardWidthWhy = 336; // ancho de w-80 + gap aprox

// Auto scroll cada 15 segundos
let intervalWhy;

function startAutoSlideWhy() {
  intervalWhy = setInterval(() => {
    if (scrollAmountWhy >= carouselWhy.scrollWidth - carouselWhy.clientWidth) {
      scrollAmountWhy = 0;
    } else {
      scrollAmountWhy += cardWidthWhy;
    }
    carouselWhy.scrollTo({ left: scrollAmountWhy, behavior: 'smooth' });
  }, 8000);
}

function stopAutoSlideWhy() {
  clearInterval(intervalWhy);
}

startAutoSlideWhy();

// Frenar el carousel al pasar el mouse
carouselWhy.addEventListener("mouseenter", stopAutoSlideWhy);
carouselWhy.addEventListener("mouseleave", startAutoSlideWhy);

// Frenar el carousel al tocarlo en mobile
carouselWhy.addEventListener("touchstart", stopAutoSlideWhy);
carouselWhy.addEventListener("touchend", startAutoSlideWhy);

// Flechas
nextWhy.addEventListener('click', () => {
  scrollAmountWhy += cardWidthWhy;
  if (scrollAmountWhy > carouselWhy.scrollWidth - carouselWhy.clientWidth) scrollAmountWhy = 0;
  carouselWhy.scrollTo({ left: scrollAmountWhy, behavior: 'smooth' });
});

prevWhy.addEventListener('click', () => {
  scrollAmountWhy -= cardWidthWhy;
  if (scrollAmountWhy < 0) scrollAmountWhy = carouselWhy.scrollWidth - carouselWhy.clientWidth;
  carouselWhy.scrollTo({ left: scrollAmountWhy, behavior: 'smooth' });
});