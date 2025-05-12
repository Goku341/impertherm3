@extends('layouts.app')

@section('title', 'servicios')

@section('content')
    {{-- Sección de impermeabilización y cotización --}}
    <section class="seccion" data-bg-color="#f0f4f8">
        <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
          <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
            <div class="mx-auto aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: 
            polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">Soluciones Integrales</h2>
            <p class="mt-2 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-6xl">Protección perfecta para cada superficie</p>
          </div>
          <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 sm:text-xl/8">Seleccione el paquete que mejor se adapte a sus necesidades de impermeabilización, con tecnología avanzada y garantía certificada.</p>
          
          <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
            <!-- Tarjeta Residencial con Imagen -->
            <div class="relative rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none 
            sm:p-10 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-3xl mt-8 lg:mb-16 md:mb-12 mb-8 ml-15">
              <!-- Imagen Superpuesta -->
              <div class="absolute -top-8 left-1/2 w-32 h-32 -translate-x-1/2 transform">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d" 
                    alt="Hogar moderno"
                    class="rounded-full object-cover w-full h-full shadow-lg ring-2 ring-indigo-100 transition-all hover:scale-105">
              </div>
              
              <h3 id="tier-residencial" class="text-base/7 font-semibold text-indigo-600 pt-16">Residencial</h3>
              <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-semibold tracking-tight text-gray-900">$15</span>
                <span class="text-base text-gray-500">/m²</span>
              </p>
              <p class="mt-6 text-base/7 text-gray-600">Protección ideal para viviendas y pequeñas estructuras.</p>
              <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                <!-- ... (mantén los mismos elementos de lista) ... -->
              </ul>
              <a href="{{ url('/contactanos') }}" aria-describedby="tier-residencial" class="mt-8 block rounded-md px-3.5 py-2.5 text-center 
              text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">
              Solicitar cotización
              </a>
            </div>

            <div class="relative rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none 
            sm:p-10 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-3xl mt-8 lg:mb-16 md:mb-12 mb-8">
              <!-- Imagen Superpuesta -->
              <div class="absolute -top-8 left-1/2 w-32 h-32 -translate-x-1/2 transform">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d" 
                     alt="Hogar moderno"
                     class="rounded-full object-cover w-full h-full shadow-lg ring-2 ring-indigo-100 transition-all hover:scale-105">
              </div>
              
              <h3 id="tier-residencial" class="text-base/7 font-semibold text-indigo-600 pt-16">Residencial</h3>
              <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-semibold tracking-tight text-gray-900">$15</span>
                <span class="text-base text-gray-500">/m²</span>
              </p>
              <p class="mt-6 text-base/7 text-gray-600">Protección ideal para viviendas y pequeñas estructuras.</p>
              <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                <!-- ... (mantén los mismos elementos de lista) ... -->
              </ul>
              <a href="{{ url('/contactanos') }}" aria-describedby="tier-residencial" class="mt-8 block rounded-md px-3.5 py-2.5 text-center 
              text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">
              Solicitar cotización
              </a>
            </div>

            <div class="relative rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none 
            sm:p-10 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-3xl mt-8 lg:mb-16 md:mb-12 mb-8">
              <!-- Imagen Superpuesta -->
              <div class="absolute -top-8 left-1/2 w-32 h-32 -translate-x-1/2 transform">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d" 
                     alt="Hogar moderno"
                     class="rounded-full object-cover w-full h-full shadow-lg ring-2 ring-indigo-100 transition-all hover:scale-105">
              </div>
              
              <h3 id="tier-residencial" class="text-base/7 font-semibold text-indigo-600 pt-16">Residencial</h3>
              <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-semibold tracking-tight text-gray-900">$15</span>
                <span class="text-base text-gray-500">/m²</span>
              </p>
              <p class="mt-6 text-base/7 text-gray-600">Protección ideal para viviendas y pequeñas estructuras.</p>
              <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                <!-- ... (mantén los mismos elementos de lista) ... -->
              </ul>
              <a href="{{ url('/contactanos') }}" aria-describedby="tier-residencial" class="mt-8 block rounded-md px-3.5 py-2.5 text-center 
              text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">
              Solicitar cotización
              </a>
            </div>

            <div class="relative rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none 
            sm:p-10 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-3xl mt-8 lg:mb-16 md:mb-12 mb-8">
              <!-- Imagen Superpuesta -->
              <div class="absolute -top-8 left-1/2 w-32 h-32 -translate-x-1/2 transform">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d" 
                     alt="Hogar moderno"
                     class="rounded-full object-cover w-full h-full shadow-lg ring-2 ring-indigo-100 transition-all hover:scale-105">
              </div>
              
              <h3 id="tier-residencial" class="text-base/7 font-semibold text-indigo-600 pt-16">Residencial</h3>
              <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-semibold tracking-tight text-gray-900">$15</span>
                <span class="text-base text-gray-500">/m²</span>
              </p>
              <p class="mt-6 text-base/7 text-gray-600">Protección ideal para viviendas y pequeñas estructuras.</p>
              <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                <!-- ... (mantén los mismos elementos de lista) ... -->
              </ul>
              <a href="{{ url('/contactanos') }}" aria-describedby="tier-residencial" class="mt-8 block rounded-md px-3.5 py-2.5 text-center 
              text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">
              Solicitar cotización
              </a>
            </div>

            <div class="relative rounded-3xl rounded-t-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none 
            sm:p-10 lg:mx-0 lg:rounded-tr-none lg:rounded-bl-3xl mt-8 lg:mb-16 md:mb-12 mb-8">
              <!-- Imagen Superpuesta -->
              <div class="absolute -top-8 left-1/2 w-32 h-32 -translate-x-1/2 transform">
                <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d" 
                     alt="Hogar moderno"
                     class="rounded-full object-cover w-full h-full shadow-lg ring-2 ring-indigo-100 transition-all hover:scale-105">
              </div>
              
              <h3 id="tier-residencial" class="text-base/7 font-semibold text-indigo-600 pt-16">Residencial</h3>
              <p class="mt-4 flex items-baseline gap-x-2">
                <span class="text-5xl font-semibold tracking-tight text-gray-900">$15</span>
                <span class="text-base text-gray-500">/m²</span>
              </p>
              <p class="mt-6 text-base/7 text-gray-600">Protección ideal para viviendas y pequeñas estructuras.</p>
              <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10">
                <!-- ... (mantén los mismos elementos de lista) ... -->
              </ul>
              <a href="{{ url('/contactanos') }}" aria-describedby="tier-residencial" class="mt-8 block rounded-md px-3.5 py-2.5 text-center 
              text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">
              Solicitar cotización
              </a>
            </div>
    

            
          </div>
        </div>
    </section>
@endsection