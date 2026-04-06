(() => {
  const prefersReduced =
    window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReduced) return;

  const targets = [
    'section#quienes-somos',
    'section#servicios',
    'section#paginas',
    'section#como-trabajamos',
    'section#porque-elegirnos',
    'section#faq',
    'section#contacto',
    'footer',
  ];

  const elements = targets
    .flatMap((sel) => Array.from(document.querySelectorAll(sel)))
    .filter(Boolean);

  if (!elements.length) return;

  elements.forEach((el) => el.classList.add('reveal-on-scroll'));

  const io = new IntersectionObserver(
    (entries) => {
      for (const entry of entries) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          io.unobserve(entry.target);
        }
      }
    },
    { threshold: 0.14, rootMargin: '0px 0px -10% 0px' }
  );

  elements.forEach((el) => io.observe(el));
})();

