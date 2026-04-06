<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunflower Solutions</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- CSS personalizado -->
  <link rel="stylesheet" href="assets/css/css.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/girasol-logo.png">
</head>

<body class="bg-gray-50 font-sans">

  <!-- HERO -->
  <header class="bg-[#083d77] text-white py-28 text-center px-4 overflow-hidden">
    <div class="max-w-3xl mx-auto hero-content-fade">

      <div class="hero-logo-wrapper mx-auto w-44 h-44 md:w-52 md:h-52 rounded-full mb-8">
        <img src="assets/img/Logo-SF-Solutions.png" alt="Logo"
          class="hero-logo-front w-full h-full rounded-full object-cover border-2 border-slate-200 shadow-lg">
        <div class="hero-logo-back rounded-full"></div>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
        Impulsamos tu negocio al mundo digital.
      </h1>

      <p class="text-lg text-gray-200 mb-10 leading-relaxed">
        Desarrollamos sitios y sistemas web pensados para vender, organizar y crecer.
      </p>

      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#contacto"
          class="hero-cta-btn btn-shine-effect bg-orange-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-orange-500 shadow-lg">
          Solicitar Asesoramiento
        </a>

        <a href="#servicios"
          class="hero-cta-btn bg-white text-[#083d77] px-8 py-3 rounded-xl font-semibold hover:bg-gray-100 border-2 border-transparent hover:border-gray-300">
          Ver Servicios
        </a>
      </div>

    </div>
  </header>


  <!-- QUIENES SOMOS -->
  <section id="quienes-somos" class="py-20 px-4 bg-slate-50">

    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-12 text-[#083d77]">
        ¿Quiénes Somos?
      </h2>

      <div class="bg-white p-10 rounded-2xl shadow-md space-y-6 text-gray-700 leading-relaxed">

        <p>
          Somos un equipo especializado en desarrollo web y soluciones digitales para negocios.
        </p>

        <p>
          Ayudamos a profesionales y emprendimientos a tener una presencia online clara, profesional y estratégica.
        </p>

        <p>
          Diseñamos
          <span class="font-semibold text-orange-500">sitios web y sistemas</span>
          que no solo se ven bien, sino que están pensados para facilitar la comunicación con los clientes,
          organizar pedidos y potenciar las ventas.
        </p>

        <p>
          Acompañamos cada proyecto desde la idea inicial hasta su implementación,
          brindando asesoramiento y soporte para que cada cliente tenga una herramienta digital
          que realmente impulse su crecimiento.
        </p>

      </div>
    </div>

  </section>


  <!-- SERVICIOS / CARDS -->
  <section id="servicios" class="py-16 px-4 text-center bg-slate-50">
    <h2 class="text-3xl font-bold mb-12 text-[#083d77]">¿Qué te ofrecemos?</h2>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto servicios-grid">

      <!-- CARD 1 -->
      <div class="card portfolio">
        <div class="info">
          <h3><i class="fa-solid fa-briefcase text-[#083d77]"></i> Sitios Web Profesionales</h3>
          <p>Páginas modernas y optimizadas para que tu negocio tenga presencia online 24/7 y genere confianza desde el
            primer contacto.</p>
          <p>Ideal para:</p>
          <ul class="list-disc list-inside text-gray-600 !text-sm space-y-1">
            <li>Estudios Juridicos.</li>
            <li>Profesionales Independientes.</li>
            <li>Emprendedores.</li>
            <li>Negocios Locales.</li>
          </ul>
          <!--<a href="https://estudiojuridico.wuaze.com/" target="_blank">estudiojuridico.wuaze.com</a>-->
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card ecommerce">
        <div class="info">
          <h3><i class="fa-solid fa-cart-shopping text-[#083d77] icon-cart"></i> Sistemas de Pedidos Online</h3>
          <p>Desarrollamos sistemas de catálogo y carrito donde tus clientes pueden:</p>

          <ul class="list-disc list-inside text-gray-600 !text-sm space-y-1 mt-4">
            <li>Ver productos.</li>
            <li>Agregarlos al carrito.</li>
            <li>Enviar el pedido.</li>
            <li>Coordinar directamente con el vendedor.</li>
          </ul>

          <p class="text-gray-500 !text-sm mt-6 border-t pt-4 italic">
            💡 No intervenimos en los pagos ni en la gestión de cobros. El acuerdo comercial se realiza directamente
            entre el cliente y el negocio.
          </p>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card blog">
        <div class="info">
          <h3><i class="fa-solid fa-newspaper text-[#083d77]"></i> Blogs y Noticias</h3>
          <p>Diseñamos plataformas de blog y noticias totalmente autoadministrables para que puedas publicar contenido,
            posicionarte en Google y generar confianza con tu audiencia.</p>
          <p>Ideal para:</p>
          <ul class="list-disc list-inside text-gray-600 !text-sm space-y-1">
            <li>Medios Digitales.</li>
            <li>Revistas Digitales.</li>
            <li>Emprendimientos que quieran generar contenido.</li>
          </ul>
          <!--<p>Ejemplos:</p>
                    <a href="#" target="_blank">mi-blog.com</a>-->
        </div>
        <div class="title">Blogs</div>
      </div>

    </div> <!-- FIN GRID -->
  </section>

  <!-- ===== CAROUSEL===== -->
  <section id="paginas" class="py-16 px-4 bg-slate-100">

    <div class="max-w-5xl mx-auto">

      <!-- Carousel -->
      <div class="relative overflow-hidden rounded-2xl shadow-xl cursor-pointer" id="carousel">

        <!-- Slides -->
        <div class="flex transition-transform duration-700 ease-in-out" id="slides">

          <!-- Slide 1 -->
          <div class="min-w-full relative">
            <img src="assets/img/sistema-portafolio.png"
              class="w-full h-[320px] sm:h-[400px] md:h-[500px] object-cover">
            <div class="slide-caption absolute bottom-4 left-4 sm:bottom-6 sm:left-6 
              bg-gradient-to-r from-[#083d77]/85 to-orange-600/85 text-white p-4 sm:p-5 rounded-2xl 
              max-w-[85%] sm:max-w-sm backdrop-blur-md shadow-2xl border border-white/20 
              hover:shadow-orange-600/50 transition-all duration-300">
              <h2 class="text-lg sm:text-xl font-bold">Sitio Web Profesional</h2>
              <p class="text-xs sm:text-sm mt-2 text-white/95">Página institucional para servicios legales y atención a
                clientes.</p>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="min-w-full relative">
            <img src="assets/img/sistema-pedidos-online.png"
              class="w-full h-[320px] sm:h-[400px] md:h-[500px] object-cover">
            <div class="slide-caption absolute bottom-4 left-4 sm:bottom-6 sm:left-6 
              bg-gradient-to-r from-[#083d77]/85 to-orange-600/85 text-white p-4 sm:p-5 rounded-2xl 
              max-w-[85%] sm:max-w-sm backdrop-blur-md shadow-2xl border border-white/20 
              hover:shadow-orange-600/50 transition-all duration-300">
              <h2 class="text-lg sm:text-xl font-bold">Sistema de Reservas Gaming</h2>
              <p class="text-xs sm:text-sm mt-2 text-white/95">Plataforma web para reservar productos y gestionar
                pedidos.</p>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="min-w-full relative">
            <img src="assets/img/sistema-blog-noticias.png"
              class="w-full h-[320px] sm:h-[400px] md:h-[500px] object-cover">
            <div class="slide-caption absolute bottom-4 left-4 sm:bottom-6 sm:left-6 
              bg-gradient-to-r from-[#083d77]/85 to-orange-600/85 text-white p-4 sm:p-5 rounded-2xl 
              max-w-[85%] sm:max-w-sm backdrop-blur-md shadow-2xl border border-white/20 
              hover:shadow-orange-600/50 transition-all duration-300">
              <h2 class="text-lg sm:text-xl font-bold">Revista Digital</h2>
              <p class="text-xs sm:text-sm mt-2 text-white/95">Plataforma de noticias y revista digital con contenido
                actual, análisis y
                tendencias.</p>
            </div>
          </div>

        </div>

        <!-- Flecha Izquierda -->
        <button id="prev" class="absolute left-4 top-1/2 -translate-y-1/2 
bg-white/80 hover:bg-white p-3 rounded-full shadow-lg transition">

          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-800" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />

          </svg>
        </button>
        <!-- Flecha Derecha -->
        <button id="next" class="absolute right-4 top-1/2 -translate-y-1/2 
bg-white/80 hover:bg-white p-3 rounded-full shadow-lg transition">

          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-800" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />

          </svg>
        </button>

      </div>
    </div>

  </section>

  <!-- ===== MODAL ===== -->
  <div id="modal"
    class="fixed inset-0 bg-black/60 hidden items-center justify-center z-50 p-4 backdrop-blur-sm modal-container">

    <div class="bg-white w-full max-w-2xl rounded-3xl shadow-2xl relative overflow-hidden modal-content">

      <!-- Fondo degradado decorativo -->
      <div
        class="absolute top-0 left-0 w-full h-32 bg-gradient-to-r from-[#083d77]/10 to-orange-600/10 pointer-events-none">
      </div>

      <!-- Botón cerrar mejorado -->
      <button id="closeModal"
        class="absolute top-6 right-6 z-10 text-gray-400 hover:text-gray-700 hover:bg-gray-100 p-2 rounded-full transition duration-300 w-10 h-10 flex items-center justify-center close-btn-modal">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Contenido -->
      <div class="p-8 md:p-10 relative z-5">

        <!-- Título y descripción con decoración integrada -->
        <div
          class="bg-gradient-to-r from-blue-50 to-orange-50 rounded-2xl p-8 mb-8 border border-blue-100/50 border-l-4 border-l-[#083d77]">
          <div class="flex items-start gap-3 mb-4">
            <div class="w-1 h-10 bg-gradient-to-b from-[#083d77] to-orange-600 rounded-full mt-1"></div>
            <h2 id="modalTitle" class="text-3xl md:text-4xl font-bold text-[#083d77]">
            </h2>
          </div>
          <p id="modalDescription" class="text-gray-700 leading-relaxed text-lg ml-5">
          </p>
        </div>

        <!-- Lista mejorada -->
        <div class="bg-gradient-to-r from-blue-50 to-orange-50 rounded-2xl p-6 mb-8 border border-blue-100/50">
          <ul class="space-y-4">
            <li id="modalPoint1" class="flex items-start gap-3">
              <span
                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-[#083d77] to-orange-600 text-white flex-shrink-0 mt-0.5">
                <span class="text-sm font-bold">✓</span>
              </span>
              <span class="text-gray-700"></span>
            </li>

            <li id="modalPoint2" class="flex items-start gap-3">
              <span
                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-[#083d77] to-orange-600 text-white flex-shrink-0 mt-0.5">
                <span class="text-sm font-bold">✓</span>
              </span>
              <span class="text-gray-700"></span>
            </li>

            <li id="modalPoint3" class="flex items-start gap-3">
              <span
                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-[#083d77] to-orange-600 text-white flex-shrink-0 mt-0.5">
                <span class="text-sm font-bold">✓</span>
              </span>
              <span class="text-gray-700"></span>
            </li>
          </ul>
        </div>

        <!-- Botón mejorado -->
        <div class="flex gap-4">
          <a id="modalLink" href="#" target="_blank"
            class="flex-1 bg-gradient-to-r from-[#083d77] to-blue-700 hover:from-[#062c55] hover:to-blue-800 text-white px-8 py-4 rounded-xl transition duration-300 shadow-lg hover:shadow-xl font-semibold text-center flex items-center justify-center gap-2 group">
            <span>Ver Proyecto</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:translate-x-1 transition-transform"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </a>
        </div>

      </div>

    </div>

  </div>


  <!-- CÓMO TRABAJAMOS -->
  <section id="como-trabajamos" class="py-20 px-6 bg-slate-50">
    <div class="max-w-6xl mx-auto">

      <h2 class="text-3xl font-bold text-center mb-12 text-[#083d77]">
        Cómo Trabajamos
      </h2>

      <p id="mobile-hint" class="text-center text-sm text-gray-500 mb-8 hidden">
        👆 Tocá las tarjetas para ver más información
      </p>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Paso -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">1.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Contacto</h3>
              <p class="text-gray-600">
                Nos escribís y nos contás tu idea o necesidad. No hace falta saber de tecnología.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">2.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Análisis</h3>
              <p class="text-gray-600">
                Analizamos tu proyecto y te asesoramos sobre la mejor solución para tu negocio.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">3.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Propuesta</h3>
              <p class="text-gray-600">
                Enviamos funcionalidades, plazos y precio final claros desde el inicio.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">4.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Inicio</h3>
              <p class="text-gray-600">
                Comenzamos con un anticipo del 50%. El resto se abona al finalizar.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">5.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Desarrollo</h3>
              <p class="text-gray-600">
                Creamos tu sitio o sistema y te mostramos avances durante todo el proceso.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">6.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Entrega</h3>
              <p class="text-gray-600">
                Entregamos el proyecto listo para usar.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
              <span class="text-4xl font-bold text-orange-500">7.</span>
              <h3 class="font-semibold text-xl mt-4 mb-2 text-[#083d77]">Soporte</h3>
              <p class="text-gray-600">
                Ofrecemos mantenimiento opcional según tus necesidades.
              </p>
            </div>
            <div class="flip-card-back">
              <img src="assets/img/Logo-SF-Solutions.png" class="logo-circle" alt="logo">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- PORQUE ELEGIRNOS -->

  <section id="porque-elegirnos" class="pt-16 pb-20 px-6 bg-slate-50">
    <div class="max-w-6xl mx-auto relative">

      <h2 class="text-3xl font-bold text-center mb-12 text-[#083d77] why-section-title">
        ¿Por qué elegirnos?
      </h2>

      <div class="relative">
        <!-- Flechas -->
        <button id="prev-why"
          class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow hover:bg-orange-100 z-10">
          &#10094;
        </button>
        <button id="next-why"
          class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-3 shadow hover:bg-orange-100 z-10">
          &#10095;
        </button>

        <!-- Carrusel -->
        <div id="carousel-why" class="flex gap-6 overflow-hidden scrollbar-hide px-4 sm:px-6">

          <!-- Card 1 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Experiencia</h3>
            <p class="text-gray-700 mb-2">
              Nos dedicamos con pasión a cada proyecto, asegurando que cada detalle cumpla con los estándares de calidad
              y que el resultado sea profesional y confiable.
            </p>
            <p class="text-gray-500 text-sm">
              Trabajamos de manera organizada y comprometida para que cada cliente se sienta acompañado en todo momento.
            </p>
          </div>

          <!-- Card 2 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Calidad</h3>
            <p class="text-gray-700 mb-2">
              Creamos soluciones web claras, funcionales y atractivas, adaptadas a las necesidades de cada cliente.
            </p>
            <p class="text-gray-500 text-sm">
              Cada proyecto es revisado cuidadosamente para garantizar que cumpla con nuestros altos estándares.
            </p>
          </div>

          <!-- Card 3 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Soporte</h3>
            <p class="text-gray-700 mb-2">
              Estamos disponibles para guiar y apoyar a nuestros clientes en cada etapa del proyecto, desde la idea
              inicial hasta la entrega final.
            </p>
            <p class="text-gray-500 text-sm">
              Respondemos con rapidez y dedicación, asegurando que cada consulta sea atendida.
            </p>
          </div>

          <!-- Card 4 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Innovación</h3>
            <p class="text-gray-700 mb-2">
              Aplicamos herramientas y técnicas modernas para ofrecer soluciones creativas y funcionales.
            </p>
            <p class="text-gray-500 text-sm">
              Buscamos nuevas formas de mejorar la experiencia digital y destacar frente a la competencia.
            </p>
          </div>

          <!-- Card 5 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Confianza</h3>
            <p class="text-gray-700 mb-2">
              Nuestra relación con los clientes se basa en la transparencia, la comunicación y la responsabilidad.
            </p>
            <p class="text-gray-500 text-sm">
              Cada proyecto se maneja con cuidado, asegurando resultados profesionales y duraderos.
            </p>
          </div>

          <!-- Card 6 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Resultados</h3>
            <p class="text-gray-700 mb-2">
              Nos enfocamos en crear soluciones que realmente impulsen tu negocio y generen resultados tangibles.
            </p>
            <p class="text-gray-500 text-sm">
              Nuestro objetivo es ayudarte a crecer y destacar en el mundo digital.
            </p>
          </div>

          <!-- Card 7 -->
          <div class="flex-none bg-white rounded-xl shadow p-8 w-80 hover:shadow-xl transition">
            <h3 class="font-semibold text-2xl mb-3 text-[#083d77]">Contratos</h3>
            <p class="text-gray-700 mb-2">
              Asesoramos y acompañamos en la creación de contratos claros y adaptados a cada necesidad, asegurando
              protección y transparencia.
            </p>
            <p class="text-gray-500 text-sm">
              Nuestro enfoque busca que cada acuerdo sea justo, entendible y profesional, generando confianza entre
              todas las partes.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- Tailwind extra para ocultar scroll en todos los navegadores -->
  <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    /* Animaciones del carrusel */
    @keyframes slideUpFade {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .slide-caption {
      animation: slideUpFade 0.6s ease-out forwards;
    }

    /* Animaciones del Modal */
    @keyframes modalFadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes modalSlideUp {
      from {
        opacity: 0;
        transform: translateY(40px) scale(0.95);
      }

      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .modal-container {
      animation: modalFadeIn 0.3s ease-out;
    }

    .modal-content {
      animation: modalSlideUp 0.4s ease-out;
    }

    /* Estilos sutiles para la sección ¿Por qué elegirnos? */
    #carousel-why .flex-none {
      transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
      border: 1px solid transparent;
      will-change: transform, box-shadow;
    }

    #carousel-why .flex-none:hover {
      transform: translateY(-8px);
      box-shadow: 0 24px 60px rgba(8, 61, 119, 0.12);
      border-color: rgba(248, 188, 42, 0.2);
    }

    .why-section-title {
      position: relative;
      overflow: hidden;
    }

    .why-section-title::after {
      content: "";
      position: absolute;
      left: 50%;
      bottom: -6px;
      width: 0;
      height: 4px;
      background: linear-gradient(90deg, #083d77, #ff9a24);
      border-radius: 999px;
      transform: translateX(-50%);
      transition: width 0.6s ease, opacity 0.6s ease;
      opacity: 0;
    }

    .why-section-title.active::after {
      width: 110px;
      opacity: 1;
    }

    .hero-cta-btn {
      position: relative;
      transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
      will-change: transform, box-shadow;
    }

    .hero-cta-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 18px 42px rgba(8, 61, 119, 0.14);
    }

    .hero-cta-btn:focus-visible {
      outline: 2px solid rgba(248, 188, 42, 0.8);
      outline-offset: 3px;
    }

    .hero-cta-btn.bg-orange-600 {
      animation: heroButtonGlow 8s ease-in-out infinite;
    }

    @keyframes heroButtonGlow {

      0%,
      100% {
        box-shadow: 0 14px 32px rgba(248, 188, 42, 0.05);
      }

      50% {
        box-shadow: 0 20px 44px rgba(248, 188, 42, 0.12);
      }
    }

    /* Estilos para FAQ y animación de respuestas */
    .faq-btn {
      transition: background-color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
      border-radius: 1.25rem;
    }

    .faq-btn:hover,
    .faq-btn.active {
      background: #f8fafc;
      box-shadow: 0 18px 40px rgba(8, 61, 119, 0.08);
      transform: translateY(-1px);
    }

    .faq-icon {
      transition: transform 0.25s ease, color 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 1.5rem;
      height: 1.5rem;
      border-radius: 999px;
      color: #083d77;
      background: rgba(8, 61, 119, 0.06);
    }

    .faq-btn:hover .faq-icon {
      transform: scale(1.1);
      background: rgba(8, 61, 119, 0.12);
    }

    .faq-btn.active .faq-icon {
      transform: rotate(45deg) scale(1.05);
      color: #ffffff;
      background: linear-gradient(135deg, #083d77, #ff8c2f);
      animation: faqPulse 1.4s ease-in-out infinite;
    }

    @keyframes faqPulse {

      0%,
      100% {
        box-shadow: 0 0 0 0 rgba(255, 140, 47, 0.2);
      }

      50% {
        box-shadow: 0 0 0 8px rgba(255, 140, 47, 0.04);
      }
    }

    .faq-content {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: max-height 0.45s ease, opacity 0.35s ease;
    }

    .faq-content.open {
      opacity: 1;
    }

    .faq-btn.active+.faq-content p {
      color: #334155;
    }

    /* Animación del botón cerrar */
    @keyframes rotatePlus {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(90deg);
      }
    }

    @keyframes closeFadeOut {
      0% {
        opacity: 1;
        transform: scale(1) rotate(0deg);
      }

      100% {
        opacity: 0;
        transform: scale(0.8) rotate(90deg);
      }
    }

    .close-btn-modal:hover svg {
      animation: rotatePlus 0.4s ease-in-out forwards;
    }

    .close-btn-modal.closing svg {
      animation: closeFadeOut 0.5s ease-in-out forwards;
    }

    .flip-card {
      perspective: 1000px;
      height: 200px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
      transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      border-radius: 0.75rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 1.5rem;
    }

    .flip-card-back {
      transform: rotateY(180deg);
      background: #083d77;
      /*url('assets/img/Logo-SF-Solutions.png') center center / contain no-repeat;*/
      color: #495057;
      font-size: 2rem;
    }

    .flip-card.flipped .flip-card-inner {
      transform: rotateY(0deg);
    }

    .logo-circle {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      background: white;
      padding: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }

    .flip-card-back img {
      transform: scale(0.9);
      transition: transform 0.4s ease;
    }

    .flip-card.flipped .flip-card-back img {
      transform: scale(1);
    }
  </style>


  <!-- MISION Y VISION -->

  <section class="py-20 px-6 bg-slate-50">
    <div class="max-w-6xl mx-auto">

      <h2 class="text-3xl font-bold text-center mb-12 text-[#083d77] shine-title">
        Nuestra Empresa
      </h2>

      <div class="grid md:grid-cols-2 gap-8">

        <div class="card-shine bg-white p-6 rounded-xl shadow hover:shadow-lg transition-all duration-300">
          <h3 class="font-semibold text-xl mb-2 text-[#083d77]">Misión</h3>
          <p class="text-gray-600">
            Brindar soluciones web claras, funcionales y accesibles para negocios y profesionales que quieren crecer en
            el mundo digital, ayudándolos a vender más y organizar mejor su trabajo mediante herramientas simples y
            efectivas.
          </p>
        </div>

        <div class="card-shine bg-white p-6 rounded-xl shadow hover:shadow-lg transition-all duration-300">
          <h3 class="font-semibold text-xl mb-2 text-[#083d77]">Visión</h3>
          <p class="text-gray-600">
            Convertirnos en una empresa referente en soluciones IT para pequeños y medianos negocios en Latinoamérica,
            reconocida por su compromiso, cercanía y resultados reales.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ PREGUNTAS FRECUENTES -->
  <section id="faq" class="max-w-6xl mx-auto px-4 py-16">

    <!-- Título -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-[#083d77]">Preguntas Frecuentes</h2>
      <p class="text-gray-500 mt-2">Resolvemos tus dudas sobre nuestros sistemas web</p>
    </div>

    <!-- Contenedor FAQ -->
    <div class="space-y-4">

      <!-- Item -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <button class="faq-btn w-full text-left px-6 py-4 flex justify-between items-center">
          <span class="font-medium text-[#083d77]">
            ¿Qué tipo de páginas web desarrollan?
          </span>
          <span class="faq-icon transition-transform duration-300 text-xl">+</span>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
          <p class="px-6 pb-4 text-gray-600 text-sm flex items-start gap-2">
            <span class="w-2 h-2 mt-2 bg-orange-500 rounded-full shrink-0"></span>
            <span>
              Desarrollamos páginas institucionales, tiendas online, sistemas de pedidos,
              blogs y sistemas personalizados según la necesidad de tu negocio.
            </span>
          </p>
        </div>
      </div>

      <!-- Item 1-->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <button class="faq-btn w-full text-left px-6 py-4 flex justify-between items-center">
          <span class="font-medium text-[#083d77]">
            ¿Cuánto tiempo tarda el desarrollo?
          </span>
          <span class="faq-icon transition-transform duration-300 text-xl">+</span>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
          <p class="px-6 pb-4 text-gray-600 text-sm flex items-start gap-2">
            <span class="w-2 h-2 mt-2 bg-orange-500 rounded-full shrink-0"></span>
            <span>
              El tiempo de desarrollo depende del tipo de proyecto y su complejidad.
              Antes de comenzar, te informamos un plazo estimado y lo dejamos acordado en la propuesta para que tengas
              claridad desde el inicio.
            </span>
          </p>
        </div>
      </div>

      <!-- Item 2-->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <button class="faq-btn w-full text-left px-6 py-4 flex justify-between items-center">
          <span class="font-medium text-[#083d77]">
            ¿Trabajan con cupos limitados?
          </span>
          <span class="faq-icon transition-transform duration-300 text-xl">+</span>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
          <p class="px-6 pb-4 text-gray-600 text-sm flex items-start gap-2">
            <span class="w-2 h-2 mt-2 bg-orange-500 rounded-full shrink-0"></span>
            <span>
              Sí. En SF Solutions trabajamos con una cantidad reducida de proyectos por mes para brindar un servicio
              personalizado y mantener altos estándares de calidad.
              Si la agenda está completa, podés reservar tu lugar para el próximo mes.
            </span>
          </p>
        </div>
      </div>

      <!-- Item 3-->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <button class="faq-btn w-full text-left px-6 py-4 flex justify-between items-center">
          <span class="font-medium text-[#083d77]">
            ¿Cuántos cupos mensuales tienen?
          </span>
          <span class="faq-icon transition-transform duration-300 text-xl">+</span>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
          <p class="px-6 pb-4 text-gray-600 text-sm flex items-start gap-2">
            <span class="w-2 h-2 mt-2 bg-orange-500 rounded-full shrink-0"></span>
            <span>
              Trabajamos con cupos limitados cada mes para mantener la calidad y el seguimiento personalizado de cada
              proyecto.
              Si la agenda está completa, podés reservar tu lugar para el próximo período.
            </span>
          </p>
        </div>
      </div>

      <!-- Item 4-->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <button class="faq-btn w-full text-left px-6 py-4 flex justify-between items-center">
          <span class="font-medium text-[#083d77]">
            ¿Incluye dominio y hosting?
          </span>
          <span class="faq-icon transition-transform duration-300 text-xl">+</span>
        </button>
        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
          <p class="px-6 pb-4 text-gray-600 text-sm flex items-start gap-2">
            <span class="w-2 h-2 mt-2 bg-orange-500 rounded-full shrink-0"></span>
            <span>
              El desarrollo web no incluye el costo del hosting ni del dominio.
              Estos servicios se contratan a tu nombre para que tengas el control total de tu sitio.
              Trabajamos con un proveedor profesional optimizado para rendimiento, seguridad y estabilidad. Te
              asesoramos y guiamos en todo el proceso para que sea simple y rápido.
            </span>
          </p>

        </div>
      </div>

      <!-- Item 5 -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <button class="faq-btn w-full text-left px-6 py-4 flex justify-between items-center">
          <span class="font-medium text-[#083d77]">
            ¿Cómo funciona la contratación del hosting y dominio?
          </span>
          <span class="faq-icon transition-transform duration-300 text-xl">+</span>
        </button>

        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">

          <div class="px-6 pb-4 text-gray-600 text-sm flex items-start gap-2">

            <!-- Punto -->
            <span class="w-2 h-2 mt-2 bg-orange-500 rounded-full shrink-0"></span>

            <!-- Contenido en columna -->
            <div class="space-y-2">
              <p>Trabajamos con un servidor profesional optimizado para rendimiento y seguridad.</p>

              <p class="font-medium text-[#083d77]">El proceso es el siguiente:</p>

              <p><span class="font-semibold text-orange-500">1.</span> Te enviamos el plan recomendado.</p>
              <p><span class="font-semibold text-orange-500">2.</span> Vos creás tu cuenta en la plataforma y realizás
                el pago del hosting y dominio.</p>
              <p><span class="font-semibold text-orange-500">3.</span> Nos compartís el acceso o nos agregás como
                desarrolladores.</p>
              <p><span class="font-semibold text-orange-500">4.</span> Nosotros configuramos todo y dejamos tu sitio
                listo y funcionando.</p>

              <p>De esta manera, el servicio queda a tu nombre y tenés el control total de tu proyecto.</p>
              <p>👉​Siempre recomendamos que el hosting y dominio estén a nombre del cliente para garantizar
                transparencia y propiedad total del sitio.</p>
            </div>

          </div>

        </div>
      </div>


    </div>
  </section>



  <!-- CONTACTO -->
  <section id="contacto" class="bg-gradient-to-br from-gray-100 to-gray-200 py-20 px-4 overflow-hidden">

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

      <!-- Lado izquierdo -->
      <div class="contact-left">
        <div class="contact-heading-wrapper">
          <h2 class="text-4xl font-bold text-[#083d77] mb-6 contact-heading">
            Contactanos y llevá tu proyecto al siguiente nivel
          </h2>
          <span class="contact-spaceship" aria-hidden="true">🚀</span>
        </div>

        <p class="text-gray-600 mb-6">
          En <span class="font-semibold text-[#083d77]">SF. Solutions.</span> desarrollamos
          sistemas web modernos, rápidos y escalables para que tu negocio crezca.
        </p>

        <div class="space-y-4 text-sm text-gray-600">
          <div class="flex items-center gap-3">
            <span class="w-2 h-2 bg-orange-500 rounded-full shrink-0"></span>
            <p>Asesoramiento personalizado</p>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-2 h-2 bg-orange-500 rounded-full shrink-0"></span>
            <p>Hosting y dominio gestionado</p>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-2 h-2 bg-orange-500 rounded-full shrink-0"></span>
            <p>Soporte post-lanzamiento</p>
          </div>
        </div>
      </div>

      <!-- Formulario -->
      <form id="contactForm" action="https://formspree.io/f/xdapwbol" method="POST"
        class="bg-white p-10 rounded-2xl shadow-lg space-y-5">

        <div>
          <label class="text-sm text-gray-600">Nombre</label>
          <input type="text" name="nombre" required
            class="w-full mt-1 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-orange-500 focus:outline-none transition">
        </div>

        <div>
          <label class="text-sm text-gray-600">Email</label>
          <input type="email" name="email" required
            class="w-full mt-1 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-orange-500 focus:outline-none transition">
        </div>

        <div>
          <label class="text-sm text-gray-600">Mensaje</label>
          <textarea name="mensaje" rows="4" required
            class="w-full mt-1 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-orange-500 focus:outline-none transition"></textarea>
        </div>

        <p id="mensaje-exito" class="hidden text-green-600 text-center font-semibold">
          ✅ Mensaje enviado correctamente
        </p>

        <input type="hidden" name="_subject" value="Nuevo mensaje desde Sunflower Solutions 🌻">
        <input type="hidden" name="_next" value="#">

        <button type="submit"
          class="w-full bg-orange-600 text-white py-3 rounded-xl font-semibold hover:bg-[#083d77] transition duration-300">
          Enviar mensaje
        </button>



      </form>

    </div>

  </section>

  <?php include 'assets/whatsapp.html'; ?>


  <!-- FOOTER -->
  <footer class="bg-[#083d77] text-white mt-20">

    <div class="max-w-6xl mx-auto px-4 py-10 grid md:grid-cols-3 gap-8 text-sm">

      <!-- Marca -->
      <div>
        <h3 class="text-lg font-semibold mb-3">Sunflower Solutions.</h3>
        <p class="text-gray-200">
          Desarrollo de sistemas web modernos y escalables para potenciar tu negocio.
        </p>
      </div>

      <!-- Navegación -->
      <div>
        <h4 class="font-semibold mb-3">Navegación</h4>
        <ul class="space-y-2 text-gray-200">
          <li><a href="#servicios" class="hover:text-orange-400 transition">Servicios</a></li>
          <li><a href="#faq" class="hover:text-orange-400 transition">Preguntas frecuentes</a></li>
          <li><a href="#contacto" class="hover:text-orange-400 transition">Contacto</a></li>
        </ul>
      </div>

      <!-- Redes -->
      <div>
        <h4 class="font-semibold mb-3">Redes</h4>

        <a href="https://instagram.com/sunflower.software.solutions" target="_blank"
          class="inline-flex items-center gap-2 hover:text-orange-400 transition">

          <!-- Icono de Instagram estilo moderno -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm0 1.5h10c1.933 0 3.5 1.567 3.5 3.5v10c0 1.933-1.567 3.5-3.5 3.5H7c-1.933 0-3.5-1.567-3.5-3.5V7c0-1.933 1.567-3.5 3.5-3.5z" />
            <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 1.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7z" />
            <circle cx="17.5" cy="6.5" r="1.5" />
          </svg>

          Instagram
        </a>
      </div>

    </div>

    <!-- Línea inferior -->
    <div class="border-t border-blue-800 text-center py-4 text-xs text-gray-300">
      © <?php echo date('Y'); ?> Sunflower Solutions. Todos los derechos reservados.
    </div>

  </footer>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const contactSection = document.getElementById('contacto');
      const spaceship = document.querySelector('.contact-spaceship');
      let hasFlown = false;
      let isVisible = false;
      let animationTimeout;

      // Detecta entrada SALIDA de viewport
      function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
      }

      // Función de lanzamiento
      function launchSpaceship() {
        if (hasFlown || spaceship.classList.contains('flying')) return;

        console.log('🚀 ¡LANZAMIENTO!'); // Debug
        hasFlown = true;
        spaceship.classList.remove('landed');
        spaceship.classList.add('flying');

        // Reset EXACTO después de 10s
        animationTimeout = setTimeout(() => {
          spaceship.classList.remove('flying');
          spaceship.classList.add('landed');
          hasFlown = false;
          console.log('🛬 Aterrizaje completado');
        }, 10000);
      }

      // Intersection Observer AVANZADO
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          const wasVisible = isVisible;
          isVisible = entry.isIntersecting;

          // SOLO lanza si entra en viewport Y no ha volado
          if (isVisible && !wasVisible && !hasFlown) {
            // Delay dramático
            setTimeout(launchSpaceship, 300);
          }
        });
      }, {
        threshold: 0.2,
        rootMargin: '-5% 0px -15% 0px'
      });

      observer.observe(contactSection);

      // Cleanup
      window.addEventListener('beforeunload', () => {
        if (animationTimeout) clearTimeout(animationTimeout);
      });
    });
  </script>

  <script>
    // Evitar que el hash haga scroll automático
    if (window.location.hash) {
      window.scrollTo(0, 0);
    }

    document.addEventListener('DOMContentLoaded', function () {
      var serviciosGrid = document.querySelector('#servicios .servicios-grid');
      if (!serviciosGrid) return;

      var lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
      var scrollDirectionDown = true;

      window.addEventListener('scroll', function () {
        var currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
        scrollDirectionDown = currentScrollY >= lastScrollY;
        lastScrollY = currentScrollY;
      }, { passive: true });

      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            serviciosGrid.classList.add('revealed');
          } else {
            serviciosGrid.classList.remove('revealed');
          }
        });
      }, { threshold: 0.25 });

      observer.observe(serviciosGrid);

      var quienes = document.querySelector('#quienes-somos');
      if (quienes) {
        var quienesObserver = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              quienes.classList.remove('animate-from-bottom', 'animate-from-top');
              void quienes.offsetWidth;
              if (scrollDirectionDown) {
                quienes.classList.add('animate-from-bottom');
              } else {
                quienes.classList.add('animate-from-top');
              }
            } else {
              quienes.classList.remove('animate-from-bottom', 'animate-from-top');
              quienes.style.opacity = '0';
            }
          });
        }, { threshold: 0.2 });

        quienesObserver.observe(quienes);
      }
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const whyTitle = document.querySelector('.why-section-title');
      if (!whyTitle) return;

      const whyObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
            whyObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      whyObserver.observe(whyTitle);
    });
  </script>
  <script src="assets/js/carousel.js"></script>
  <script src="assets/js/carousel-why.js"></script>
  <script src="assets/js/faq.js"></script>
  <script src="assets/js/contactform.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const flipCards = document.querySelectorAll('.flip-card');
      flipCards.forEach(card => {
        card.addEventListener('pointerenter', function () {
          this.classList.add('flipped');
        });
      });
    });
  </script>

  <script>
    function isMobile() {
      return window.innerWidth <= 768;
    }

    if (isMobile()) {
      document.getElementById('mobile-hint').classList.remove('hidden');
    }
  </script>

</body>

</html>