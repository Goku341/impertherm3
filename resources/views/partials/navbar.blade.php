<header class="bg-gray-900">
    <div class="container mx-auto flex justify-between items-center py-4 px-6" id="inicio">
      <!-- Logo -->
      <a href="{{ route('inicio') }}" class="flex items-center">
        <img src="{{ asset('resources/images/logo.png') }}" alt="Logo" class="h-10">
      </a>
  
      <!-- Menú de navegación para escritorio -->
      <nav class="hidden md:flex space-x-6">
        <a href="{{ url('nav/nosotros') }}" class="relative text-white hover:text-gray-400 group">
          Sobre Nosotros
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ url('nav/servicios') }}" class="relative text-white hover:text-gray-400 group">
          Nuestros servicios
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ url('nav/proyectos') }}" class="relative text-white hover:text-gray-400 group">
          Proyectos
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ url('nav/contactanos') }}" class="relative text-white hover:text-gray-400 group">
          Contactanos
          <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
        <!-- Redes Sociales -->
        <div class="flex space-x-4 text-xl text-gray-700">
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
      </nav>
  
      <!-- Botón de menú móvil -->
    <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
      <img src="{{ asset('images/icons/menu.png') }}" alt="Menú" class="h-8 w-8">
    </button>
  </div>

  <!-- Barra animada -->
  <div id="menu-bar" class="h-1 bg-white-500 hidden transition-all duration-1000"></div>

  <!-- Menú móvil -->
  <div id="mobile-menu" class="md:hidden hidden bg-gray-900">
    <nav class="px-6 pb-4 space-y-4">
      <a href="#about" class="block text-white hover:text-gray-400">Sobre nosotros</a>
      <a href="#team" class="block text-white hover:text-gray-400">Nuestros servicios</a>
      <a href="#projects" class="block text-white hover:text-gray-400">Proyectos</a>
      <a href="#contact" class="block text-white hover:text-gray-400">Contactanos</a>
    </nav>
  </div>
  </header>