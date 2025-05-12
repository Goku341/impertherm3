    // Selecciona el contenedor de slides e indicadores
    const slides = document.getElementById('slides');
    const indicators = document.querySelectorAll('[data-slide]');
    const totalSlides = indicators.length;
    let currentSlide = 0;
    let interval;

    // Función para ir a un slide específico
    function goToSlide(index) {
      if(index < 0) {
        currentSlide = totalSlides - 1;
      } else if(index >= totalSlides) {
        currentSlide = 0;
      } else {
        currentSlide = index;
      }
      slides.style.transform = `translateX(-${currentSlide * 100}%)`;
      updateIndicators();
    }

    // Actualiza la apariencia de los indicadores
    function updateIndicators() {
      indicators.forEach((btn, idx) => {
        btn.style.opacity = (idx === currentSlide) ? '1' : '0.5';
      });
    }

    // Funciones para cambiar de slide
    function nextSlide() {
      goToSlide(currentSlide + 1);
    }
    function prevSlide() {
      goToSlide(currentSlide - 1);
    }

    // Asigna evento click a cada botón indicador
    indicators.forEach(btn => {
      btn.addEventListener('click', () => {
        goToSlide(parseInt(btn.getAttribute('data-slide')));
        resetInterval();
      });
    });

    // Eventos en los botones de navegación
    document.getElementById('next').addEventListener('click', () => {
      nextSlide();
      resetInterval();
    });
    document.getElementById('prev').addEventListener('click', () => {
      prevSlide();
      resetInterval();
    });

    // Configuración del auto slide con intervalos
    function startInterval() {
      interval = setInterval(nextSlide, 5000); // Cambia slide cada 5 segundos
    }
    function resetInterval() {
      clearInterval(interval);
      startInterval();
    }

    // Inicializa el carousel
    startInterval();
    updateIndicators();
