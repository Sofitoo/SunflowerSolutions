document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".faq-btn");

  buttons.forEach(button => {
    button.setAttribute('aria-expanded', 'false');
    const content = button.nextElementSibling;
    if (content) {
      content.setAttribute('aria-hidden', 'true');
    }

    button.addEventListener("click", () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector(".faq-icon");
      const isOpen = button.classList.contains('active');

      if (isOpen) {
        content.style.maxHeight = null;
        content.classList.remove('open');
        button.classList.remove('active');
        button.setAttribute('aria-expanded', 'false');
        content.setAttribute('aria-hidden', 'true');
        icon.textContent = "+";
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        content.classList.add('open');
        button.classList.add('active');
        button.setAttribute('aria-expanded', 'true');
        content.setAttribute('aria-hidden', 'false');
        icon.textContent = "−";
      }
    });
  });
});
