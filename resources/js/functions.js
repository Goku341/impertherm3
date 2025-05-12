//// MENU DE EL HEADER ////
document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  }
});

// BOTON DE SCROLL //
document.addEventListener("scroll", () => {
  const scrollTop = document.documentElement.scrollTop; // Posición actual del scroll
  const scrollHeight = document.documentElement.scrollHeight; // Altura total de la página
  const clientHeight = document.documentElement.clientHeight; // Altura visible
  const scrollPercentage = (scrollTop / (scrollHeight - clientHeight)) * 100; // Porcentaje de scroll

  const progressCircle = document.getElementById("progress-circle");
  const circleCircumference = 2 * Math.PI * 45; // Circunferencia del círculo (r=45)
});

  // Calcula el desplazamiento del círculo basado en el porcentaje de scroll
  window.addEventListener('scroll', () => {
    const progressCircle = document.getElementById('progress-circle');
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercentage = (scrollTop / scrollHeight) * 100;
  
    const circleRadius = 40; // debe coincidir con el radio del SVG
    const circleCircumference = 2 * Math.PI * circleRadius;
    
    // Calcula el desplazamiento del círculo basado en el porcentaje de scroll
    const offset = circleCircumference - (scrollPercentage / 100) * circleCircumference;
    progressCircle.style.strokeDashoffset = offset;
  });
