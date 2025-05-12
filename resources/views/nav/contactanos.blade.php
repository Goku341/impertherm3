@extends('layouts.app')

@section('title', 'contactos')

@section('content')
<section class="relative bg-white overflow-hidden">
    <!-- Decoración difusa -->
    <div aria-hidden="true" class="absolute inset-x-0 top-0 -z-10 transform-gpu blur-3xl">
      <div class="relative left-1/2 w-[40rem] -translate-x-1/2 rotate-30 bg-gradient-to-tr from-pink-300 to-purple-400 opacity-20"
           style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);">
      </div>
    </div>
  
    <div class="max-w-7xl mx-auto px-4 py-16 sm:py-24 lg:py-32">
      <!-- Título principal -->
      <div class="text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Contáctanos</h2>
        <p class="mt-4 text-lg text-gray-600">Solicita tu cotización describiendo tu problema.</p>
      </div>
  
      <!-- Contenedor: formulario + mapa -->
      <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Tarjeta de formulario -->
        <div class="bg-gray-50 p-8 rounded-2xl shadow-xl">
          {{-- Mensaje de éxito --}}
          @if(session('success'))
            <div class="flex items-center gap-2 mb-6 rounded-lg bg-green-100 border border-green-200 p-4 text-green-800">
              <svg class="h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
              </svg>
              <span>{{ session('success') }}</span>
            </div>
          @endif
  
          {{-- Errores --}}
          @if($errors->any())
            <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4 text-red-700">
              <ul class="list-disc pl-5 space-y-1">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
  
          <form id="contact-form" class="space-y-6" method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
            @csrf
  
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="first_name" name="first_name" type="text" required value="{{ old('first_name') }}"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 transition" />
                @error('first_name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
              </div>
              <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Apellidos</label>
                <input id="last_name" name="last_name" type="text" required value="{{ old('last_name') }}"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 transition" />
                @error('last_name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
              </div>
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input id="email" name="email" type="email" required value="{{ old('email') }}"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 transition" />
                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
              </div>
              <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input id="phone" name="phone" type="tel" required value="{{ old('phone') }}"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 transition" />
                @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
              </div>
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">Adjuntar imágenes (Máx. 5)</label>
              <div class="mt-1">
                <div id="drop-zone" class="flex justify-center items-center p-6 border-2 border-dashed border-indigo-300 bg-indigo-50 rounded-lg hover:border-indigo-400 transition">
                  <svg class="h-8 w-8 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 15a4 4 0 104 4h10a4 4 0 100-8 5 5 0 10-10 0H7a4 4 0 00-4 4z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 13l-4-4-4 4" />
                  </svg>
                  <label for="images" class="ml-2 inline-block cursor-pointer rounded-md bg-white px-4 py-2 text-sm font-medium text-indigo-600 hover:bg-indigo-50 transition">
                    Subir archivos
                    <input id="images" name="images[]" type="file" multiple accept="image/*" class="sr-only">
                  </label>
                </div>
                <p class="mt-2 text-xs text-gray-500">PNG, JPG, GIF – hasta 2 MB cada uno</p>
                <div id="preview-container" class="mt-4 grid grid-cols-3 gap-3"></div>
                @error('images.*') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
              </div>
            </div>
  
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700">Detalles del problema</label>
              <textarea id="message" name="message" rows="4" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 transition"
                        placeholder="Descríbenos tu situación">{{ old('message') }}</textarea>
              @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
  
          <div class="flex justify-end gap-4">
            <button type="reset"
                    class="px-4 py-2 text-sm font-medium text-blue-600 hover:text-blue-800 transition">
              Cancelar
            </button>
            <button id="submit-button"
                    type="submit"
                    class="px-6 py-3 text-sm font-semibold rounded-full bg-yellow-400 text-white shadow-lg
                           hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-300 transition">
              Enviar Solicitud
            </button>
          </div>
          </form>
        </div>
  
        <!-- Tarjeta de mapa -->
        <div class="h-80 rounded-2xl overflow-hidden shadow-xl">
          <iframe
            class="w-full h-full"
            src="https://maps.google.com/maps?q=20.89377886371049,-89.6208303550479&z=15&output=embed"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </section>
  
@endsection