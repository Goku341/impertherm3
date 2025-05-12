const icons = document.querySelectorAll(".vibrating-icon"); // Selecciona todos los elementos con la clase

icons.forEach((icon) => {
  icon.addEventListener("mouseover", () => {
    icon.style.transform = "scale(1.05)";
    icon.style.animation = "vibrate 0.5s linear infinite"; // Vibración rápida

    setTimeout(() => {
      icon.style.transform = "scale(1)"; // Vuelve al tamaño normal
      icon.style.animation = "none"; // Detiene la vibración
    }, 1000); // 1 segundo
  });
});

// Animación CSS
const style = document.createElement("style");
style.innerHTML = `
  @keyframes vibrate {
    0% { transform: translateX(-2px); }
    25% { transform: translateX(2px); }
    50% { transform: translateX(-2px); }
    75% { transform: translateX(2px); }
    100% { transform: translateX(0); }
  }
`;
document.head.appendChild(style);

