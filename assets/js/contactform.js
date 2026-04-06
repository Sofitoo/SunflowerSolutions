const form = document.getElementById("contactForm");
const mensaje = document.getElementById("mensaje-exito");

form.addEventListener("submit", async function(e) {
  e.preventDefault(); // evita recarga

  const data = new FormData(form);

  try {
    const res = await fetch(form.action, {
      method: "POST",
      body: data,
      headers: {
        'Accept': 'application/json'
      }
    });

    if (res.ok) {
      form.reset(); // limpia el formulario
      mensaje.classList.remove("hidden"); // muestra mensaje
    } else {
      alert("Error al enviar 😢");
    }
  } catch (error) {
    alert("Error de conexión 😢");
  }
});