const carouselWhy = document.getElementById('carousel-why');
const nextWhy = document.getElementById('next-why');
const prevWhy = document.getElementById('prev-why');

let scrollAmountWhy = 0;
let cardStepWhy = 336; // fallback: ancho de w-80 + gap aprox
let originalCountWhy = 0;
let clonesEachSideWhy = 2;
let isJumpingWhy = false;

// Auto scroll cada 15 segundos
let intervalWhy;

function getCardStepWhy() {
  const first = carouselWhy?.querySelector('.flex-none');
  if (!first) return cardStepWhy;

  const styles = window.getComputedStyle(carouselWhy);
  const gap = parseFloat(styles.gap || styles.columnGap || '0') || 0;
  const w = first.getBoundingClientRect().width || first.offsetWidth || 320;
  return Math.round(w + gap);
}

function setupInfiniteWhy() {
  if (!carouselWhy) return;
  if (carouselWhy.dataset.infinite === '1') return;
  carouselWhy.dataset.infinite = '1';

  const cards = Array.from(carouselWhy.children).filter((n) => n.nodeType === 1);
  originalCountWhy = cards.length;
  if (originalCountWhy < 2) return;

  cardStepWhy = getCardStepWhy();
  clonesEachSideWhy = Math.min(3, Math.max(2, originalCountWhy));

  // Clonar al final (primeras N)
  for (let i = 0; i < clonesEachSideWhy; i++) {
    const clone = cards[i].cloneNode(true);
    clone.setAttribute('data-clone', '1');
    carouselWhy.appendChild(clone);
  }

  // Clonar al inicio (últimas N)
  for (let i = originalCountWhy - clonesEachSideWhy; i < originalCountWhy; i++) {
    const clone = cards[i].cloneNode(true);
    clone.setAttribute('data-clone', '1');
    carouselWhy.insertBefore(clone, carouselWhy.firstChild);
  }

  // Posición inicial: saltear clones del inicio
  const startLeft = clonesEachSideWhy * cardStepWhy;
  carouselWhy.scrollLeft = startLeft;
  scrollAmountWhy = startLeft;
}

function updateActiveWhyCard() {
  if (!carouselWhy) return;
  const cards = Array.from(carouselWhy.querySelectorAll('.flex-none'));
  if (!cards.length) return;

  const containerRect = carouselWhy.getBoundingClientRect();
  const centerX = containerRect.left + containerRect.width / 2;

  let bestCard = null;
  let bestDist = Infinity;

  for (const card of cards) {
    const r = card.getBoundingClientRect();
    const cardCenter = r.left + r.width / 2;
    const dist = Math.abs(cardCenter - centerX);
    if (dist < bestDist) {
      bestDist = dist;
      bestCard = card;
    }
  }

  for (const card of cards) {
    card.classList.toggle('why-card-active', card === bestCard);
  }
}

function startAutoSlideWhy() {
  intervalWhy = setInterval(() => {
    scrollAmountWhy = carouselWhy.scrollLeft;
    scrollAmountWhy += cardStepWhy;
    carouselWhy.scrollTo({ left: scrollAmountWhy, behavior: 'smooth' });
    window.requestAnimationFrame(updateActiveWhyCard);
  }, 8000);
}

function stopAutoSlideWhy() {
  clearInterval(intervalWhy);
}

setupInfiniteWhy();
startAutoSlideWhy();

// Frenar el carousel al pasar el mouse
carouselWhy.addEventListener("mouseenter", stopAutoSlideWhy);
carouselWhy.addEventListener("mouseleave", startAutoSlideWhy);

// Frenar el carousel al tocarlo en mobile
carouselWhy.addEventListener("touchstart", stopAutoSlideWhy);
carouselWhy.addEventListener("touchend", startAutoSlideWhy);

// Flechas
nextWhy.addEventListener('click', () => {
  scrollAmountWhy = carouselWhy.scrollLeft + cardStepWhy;
  carouselWhy.scrollTo({ left: scrollAmountWhy, behavior: 'smooth' });
  window.requestAnimationFrame(updateActiveWhyCard);
});

prevWhy.addEventListener('click', () => {
  scrollAmountWhy = carouselWhy.scrollLeft - cardStepWhy;
  carouselWhy.scrollTo({ left: scrollAmountWhy, behavior: 'smooth' });
  window.requestAnimationFrame(updateActiveWhyCard);
});

// Actualizar card activa mientras se scrollea (throttle con rAF)
let rafWhy = 0;
carouselWhy.addEventListener(
  'scroll',
  () => {
    if (!carouselWhy || !originalCountWhy || isJumpingWhy) return;

    const minLeft = (clonesEachSideWhy - 0.5) * cardStepWhy;
    const maxLeft = (clonesEachSideWhy + originalCountWhy - 0.5) * cardStepWhy;
    const left = carouselWhy.scrollLeft;

    // Si entramos a la zona de clones, saltamos a la posición equivalente
    if (left < minLeft) {
      isJumpingWhy = true;
      const newLeft = left + originalCountWhy * cardStepWhy;
      carouselWhy.scrollLeft = newLeft;
      scrollAmountWhy = newLeft;
      isJumpingWhy = false;
      return;
    }

    if (left > maxLeft) {
      isJumpingWhy = true;
      const newLeft = left - originalCountWhy * cardStepWhy;
      carouselWhy.scrollLeft = newLeft;
      scrollAmountWhy = newLeft;
      isJumpingWhy = false;
      return;
    }

    if (rafWhy) return;
    rafWhy = window.requestAnimationFrame(() => {
      rafWhy = 0;
      updateActiveWhyCard();
    });
  },
  { passive: true }
);

window.addEventListener(
  'resize',
  () => {
    // Recalcular step por si cambia el ancho en responsive
    cardStepWhy = getCardStepWhy();
    window.requestAnimationFrame(updateActiveWhyCard);
  },
  { passive: true }
);

// Estado inicial
window.requestAnimationFrame(updateActiveWhyCard);