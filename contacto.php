<section id="contacto" class="p-10 bg-white">
  <h3 class="text-2xl font-bold mb-4 text-center">Contacto</h3>

  <!-- Mensaje de envío -->
  <div id="mensaje-envio" class="hidden text-green-600 font-bold mb-4 text-center"></div>

  <form id="form-contacto" action="https://formspree.io/f/xjgekjop" method="POST" class="max-w-md mx-auto space-y-4">
    <input type="text" name="nombre" placeholder="Tu nombre" required class="w-full p-3 border rounded">
    <input type="email" name="email" placeholder="Tu email" required class="w-full p-3 border rounded">
    <textarea name="mensaje" placeholder="Tu mensaje" required class="w-full p-3 border rounded"></textarea>
    <button type="submit" class="bg-sky-400 text-white px-6 py-3 rounded font-semibold">
      Enviar
    </button>
  </form>
</section>
