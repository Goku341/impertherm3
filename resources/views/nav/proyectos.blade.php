@extends('layouts.app')

@section('title', 'proyectos')

@section('content')
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <!-- Header -->
    <header class="text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900">
        Encuentra el proyecto que mejor se adapte a tus necesidades
      </h2>
      <p class="mt-4 max-w-lg mx-auto text-gray-600">
        Ofrecemos una amplia variedad de soluciones de impermeabilización: desde azoteas residenciales hasta cisternas industriales.
      </p>
    </header>

    <!-- Contador de proyectos -->
    <div class="mt-8 flex justify-end text-sm text-gray-500">
      Mostrando <span class="font-medium">4</span> de <span class="font-medium">40</span> proyectos
    </div>

    <!-- Galería de proyectos -->
    <ul class="mt-4 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      <!-- Proyecto 1 -->
      <li>
        <a href="#" class="group block overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition">
          <img
            src="https://images.unsplash.com/photo-1560185127-6f3927e6f3d6?crop=entropy&auto=format&fit=crop&h=450&w=600"
            alt="Impermeabilización de Azotea"
            class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-105"
          />
          <div class="bg-white p-4">
            <h3 class="text-lg font-semibold text-gray-800 group-hover:underline">
              Azoteas Residenciales
            </h3>
            <p class="mt-2 text-sm text-gray-600">
              Membranas líquidas de alta resistencia para proteger tu hogar.
            </p>
          </div>
        </a>
      </li>

      <!-- Proyecto 2 -->
      <li>
        <a href="#" class="group block overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition">
          <img
            src="https://images.unsplash.com/photo-1597436000965-5ef0f3da6a52?crop=entropy&auto=format&fit=crop&h=450&w=600"
            alt="Impermeabilización de Muros"
            class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-105"
          />
          <div class="bg-white p-4">
            <h3 class="text-lg font-semibold text-gray-800 group-hover:underline">
              Muros Exteriores
            </h3>
            <p class="mt-2 text-sm text-gray-600">
              Recubrimiento impermeable para fachadas y muros perimetrales.
            </p>
          </div>
        </a>
      </li>

      <!-- Proyecto 3 -->
      <li>
        <a href="#" class="group block overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition">
          <img
            src="https://images.unsplash.com/photo-1581092795368-1e4f8a96f0c4?crop=entropy&auto=format&fit=crop&h=450&w=600"
            alt="Impermeabilización de Cisterna"
            class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-105"
          />
          <div class="bg-white p-4">
            <h3 class="text-lg font-semibold text-gray-800 group-hover:underline">
              Cisternas y Tanques
            </h3>
            <p class="mt-2 text-sm text-gray-600">
              Sellado interior con recubrimientos sanitarios de grado alimenticio.
            </p>
          </div>
        </a>
      </li>

      <!-- Proyecto 4 -->
      <li>
        <a href="#" class="group block overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition">
          <img
            src="https://images.unsplash.com/photo-1611762975957-a0bdbf4b3d0a?crop=entropy&auto=format&fit=crop&h=450&w=600"
            alt="Impermeabilización de Terraza"
            class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-105"
          />
          <div class="bg-white p-4">
            <h3 class="text-lg font-semibold text-gray-800 group-hover:underline">
              Terrazas y Balcones
            </h3>
            <p class="mt-2 text-sm text-gray-600">
              Membranas prefabricadas o líquidas para áreas exteriores.
            </p>
          </div>
        </a>
      </li>
    </ul>

    <!-- Paginación -->
    <nav class="mt-8 flex justify-center items-center space-x-2 text-sm">
      <a href="#"
         class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-200 hover:bg-gray-100"
         aria-label="Página anterior">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-200">1</a>
      <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded bg-blue-600 text-white">2</a>
      <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-200">3</a>
      <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-200">4</a>
      <a href="#"
         class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-200 hover:bg-gray-100"
         aria-label="Página siguiente">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
        </svg>
      </a>
    </nav>
  </div>
</section>

@endsection