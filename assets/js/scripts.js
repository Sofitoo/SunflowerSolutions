// Animación del carrito de compras
document.addEventListener('DOMContentLoaded', function() {
  const cartGroup = document.querySelector('.cart-group');
  if (!cartGroup) return;

  let position = 0;
  let direction = 1;
  const maxPosition = 30;
  const speed = 0.5;

  function animateCart() {
    position += speed * direction;

    if (position >= maxPosition || position <= 0) {
      direction *= -1;
    }

    const rotation = Math.sin(position * 0.1) * 2; // Rotación sinusoidal
    cartGroup.style.transform = `translateX(${position}px) rotate(${rotation}deg)`;

    requestAnimationFrame(animateCart);
  }

  animateCart();
});