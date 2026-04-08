document.addEventListener("DOMContentLoaded", () => {
  const slides = document.getElementById("slides");
  const totalSlides = 3;
  let index = 0;
  let interval;

  function showSlide(i) {
    index = (i + totalSlides) % totalSlides;
    slides.style.transform = `translateX(-${index * 100}%)`;
  }

  function startAutoSlide() {
    interval = setInterval(() => {
      showSlide(index + 1);
    }, 15000);
  }

  function stopAutoSlide() {
    clearInterval(interval);
  }

  // Flechas
  document.getElementById("next").addEventListener("click", (e) => {
    e.stopPropagation();
    showSlide(index + 1);
  });

  document.getElementById("prev").addEventListener("click", (e) => {
    e.stopPropagation();
    showSlide(index - 1);
  });

  // Modal
  const modal = document.getElementById("modal");
  const modalTitle = document.getElementById("modalTitle");
  const modalDescription = document.getElementById("modalDescription");

  const data = [
    {
      title: "⚖️ Sitio Web Profesional para Abogado",
      description:
        "Sitio web desarrollado para mejorar la presencia digital y facilitar el contacto con potenciales clientes.",
      points: [
        "Presentación de servicios legales",
        "Diseño responsive",
        "Formulario de contacto",
      ],
      link: "https://estudiojuridico.wuaze.com/",
    },
    {
      title: "🎮 Sistema de Reservas Gaming",
      description: "Plataforma web para reservar productos online.",
      points: [
        "Interfaz intuitiva y responsive",
        "Sistema de reserva de productos",
        "Panel de administración",
      ],
      link: "https://level-up-store-games.gamer.gd/",
    },
    {
      title: "📰 Revista Digital",
      description:
        "Revista online moderna pensada para compartir noticias y tendencias en tiempo real.",
      points: [
        "Publicación de artículos y novedades",
        "Interfaz clara y atractiva, optimizada para todos los dispositivos",
        "Panel de administración de contenidos",
      ],
      link: "https://novapress.iblogger.org/",
    },
  ];

  document.getElementById("carousel").addEventListener("click", () => {
    modalTitle.textContent = data[index].title;
    modalDescription.textContent = data[index].description;
    document.getElementById("modalPoint1").textContent = data[index].points[0];
    document.getElementById("modalPoint2").textContent = data[index].points[1];
    document.getElementById("modalPoint3").textContent = data[index].points[2];
    const modalLink = document.getElementById("modalLink");
    modalLink.href = data[index].link;
    modal.classList.remove("hidden");
    modal.classList.add("flex");
  });

  document.getElementById("closeModal").addEventListener("click", () => {
    const closeBtn = document.getElementById("closeModal");
    closeBtn.classList.add("closing");
    setTimeout(() => {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
      closeBtn.classList.remove("closing");
    }, 500);
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      const closeBtn = document.getElementById("closeModal");
      closeBtn.classList.add("closing");
      setTimeout(() => {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
        closeBtn.classList.remove("closing");
      }, 500);
    }
  });

  // Iniciar auto slide
  startAutoSlide();
});
