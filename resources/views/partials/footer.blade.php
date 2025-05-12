<footer class="bg-gray-900 text-gray-400 py-12">
    <div class="container mx-auto px-4">
      <!-- Grid para dividir el contenido en columnas -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        
        <!-- Columna: Logo y Contacto -->
        <div>
          <a href="#inicio">
            <img src="{{ asset('images/logo 2.png') }}" alt="Logo" class="mb-4">
          </a>      
          <p class="text-sm mb-6">
            We're always in search of talented and motivated people. Don't be shy, introduce yourself!
          </p>
          <a href="{{ url('/contactanos') }}"
             class="relative inline-flex items-center text-white bg-blue-600 py-2 px-4 rounded transition-transform hover:scale-105 group">
            Cantactanos
            <span class="ml-2 inline-block transition-transform duration-300 group-hover:-translate-x-2 opacity-0 group-hover:opacity-100"></span>
          </a>
        </div>
        
        <!-- Columna: Useful Links -->
        <div>
          <h3 class="text-lg font-bold text-white mb-4">Useful Links</h3>
          <ul class="space-y-2">
            <li><a href="#" class="footer-link">Marketplace</a></li>
            <li><a href="#" class="footer-link">Kindergarten</a></li>
            <li><a href="#" class="footer-link">University</a></li>
            <li><a href="#" class="footer-link">GYM Coaching</a></li>
            <li><a href="#" class="footer-link">FAQ</a></li>
          </ul>
        </div>
        
        <!-- Columna: Our Company -->
        <div>
          <h3 class="text-lg font-bold text-white mb-4">Nuestra empresa</h3>
          <ul class="space-y-2">
            <li><a href="{{ url('/nosotros') }}" class="footer-link">Sobre Nosotros</a></li>
            <li><a href="{{ url('/servicios') }}" class="footer-link">Nuestros servicios</a></li>
            <li><a href="{{ url('/proyectos') }}" class="footer-link">Proyectos</a></li>
            <li><a href="{{ url('/contactanos') }}" class="footer-link">Contactanos</a></li>
          </ul>
        </div>
        
        <!-- Columna: Get Contact -->
        <div>
          <h3 class="text-lg font-bold text-white mb-4">Get Contact</h3>
          <ul class="space-y-2">
            <li>Phone: (406) 555-0120</li>
            <li>Email: <a href="mailto:rainbow@example.com" class="footer-link">rainbow@example.com</a></li>
            <li>Ubucación: México, México</li>
          </ul>
                <!-- Redes Sociales -->
          <div class="mt-6 flex space-x-4 text-xl text-gray-700">
            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-facebook hover:text-blue-600"></i>
            </a>
            <a href="https://www.x.com" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-twitter-x hover:text-black"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-instagram hover:text-pink-500"></i>
            </a>
            <a href="https://www.tiktok.com" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-tiktok hover:text-white"></i>
            </a>
          </div> 
        </div>      
      </div>
    </div>
  
  <!-- Línea divisoria entre las secciones del footer -->
  <div class="flex justify-center my-8">
    <div class="w-4/5 border-t border-gray-200"></div>
  </div>
  
  <!-- Parte inferior del Footer -->
  <div class="bg-gray-900 text-gray-400">
    <!-- Parte inferior del Footer -->
    <div class="bg-gray-900 text-gray-400">
      <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center">
        <!-- Aviso de copyright -->
        <p class="text-center md:text-left text-sm mb-2 md:mb-0 mr-4">
          Copyright © 2025 Impertherm. Todos los derechos reservados.
        </p>
  
        <!-- Enlaces -->
        <nav class="flex flex-wrap justify-center md:justify-end space-x-4 text-sm ml-4">
          <a href="#" class="footer-link">Terms of Service</a>
          <a href="#" class="footer-link">Privacy Policy</a>
        </nav>
      </div>
    </div>
    {{-- Boton de contacto WhatsApp--}}
    <div class="fixed bottom-6 right-6 z-50 mb-16 ml-5">
      <a href="https://wa.me/+5215569675322?text=Hola%20SIBIMEX,%20necesito%20información%20sobre%20impermeabilización"
      target="_blank"
      class="flex items-center justify-center w-16 h-16 rounded-full bg-[#25D366] hover:bg-[#128C7E] text-white shadow-xl transition-all duration-300">
      <svg viewBox="0 0 32 32" class="w-8 h-8 fill-current text-white">
          <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"/>
      </svg>
      </a>
  </div>
    <!-- Botón de scroll con barra de progreso circular -->
    <div id="scroll-button" class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-12 h-12 bg-gray-800 rounded-full shadow-lg">
      <!-- SVG Circular para la barra de progreso -->
      <svg class="absolute inset-0 w-full h-full transform -rotate-90" viewBox="0 0 100 100">
        <!-- Fondo del círculo -->
        <circle cx="50" cy="50" r="40" class="text-gray-700" fill="none" stroke="currentColor" stroke-width="4" />
        <!-- Barra de progreso -->
        <circle id="progress-circle" cx="50" cy="50" r="40" class="text-red-600" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="251.2" stroke-dashoffset="251.2" />
      </svg>
      <!-- Botón central -->
      <a href="#" class="w-8 h-8 bg-gray-900 text-white rounded-full flex items-center justify-center transform transition-transform hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
      </a>
    </div>
  </div>
  </footer>