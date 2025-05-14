@extends('layouts.app')

@section('title', 'contactos')

@section('content')
<div x-data="{ step: 1 }" class="max-w-3xl mx-auto p-6 space-y-6">
  <form action="{{ route('service.request.store') }}"
        method="POST"
        enctype="multipart/form-data"
        novalidate>
    @csrf

    {{-- Paso 1 --}}
    <div x-show="step===1" x-cloak class="space-y-4">
      <h2 class="text-xl font-bold">Paso 1 · Contacto del solicitante</h2>
      <div>
        <label class="block">Nombre completo / Razón social</label>
        <input name="full_name" type="text" value="{{ old('full_name') }}"
               class="w-full border rounded p-2" required>
      </div>
      <div>
        <label>Móvil</label>
        <input name="mobile_phone" type="tel" value="{{ old('mobile_phone') }}"
               class="w-full border rounded p-2" required>
      </div>
      <div>
        <label>Fijo (opcional)</label>
        <input name="landline" type="tel" value="{{ old('landline') }}"
               class="w-full border rounded p-2">
      </div>
      <div>
        <label>Correo electrónico</label>
        <input name="email" type="email" value="{{ old('email') }}"
               class="w-full border rounded p-2" required>
      </div>
      <div>
        <label>Forma de contacto preferida</label>
        <select name="preferred_contact" class="w-full border rounded p-2" required>
          <option value="">Selecciona...</option>
          <option>Teléfono</option>
          <option>WhatsApp</option>
          <option>Correo</option>
        </select>
      </div>
    </div>

    {{-- Paso 2 --}}
    <div x-show="step===2" x-cloak class="space-y-4">
      <h2 class="text-xl font-bold">Paso 2 · Datos técnicos de la superficie</h2>
      <div>
        <label>Tipo de superficie</label>
        <select x-model="stype" name="surface_type" class="w-full border rounded p-2">
          <option>Techo</option><option>Muro</option><option>Cisterna</option>
          <option>Terraza</option><option>Canalón</option><option>Otro</option>
        </select>
        <template x-if="stype==='Otro'">
          <input name="surface_type_other" placeholder="Especifica..." class="w-full border rounded p-2 mt-2">
        </template>
      </div>
      <div>
        <label>Material actual</label>
        <select x-model="mat" name="surface_material" class="w-full border rounded p-2">
          <option>Concreto</option><option>Lámina</option><option>Teja</option>
          <option>Asfalto</option><option>Poliuretano</option><option>Otro</option>
        </select>
        <template x-if="mat==='Otro'">
          <input name="surface_material_other" placeholder="Especifica..." class="w-full border rounded p-2 mt-2">
        </template>
      </div>
      <div>
        <label>Metros cuadrados</label>
        <input name="area" type="number" step="0.1" min="1" value="{{ old('area') }}"
               class="w-full border rounded p-2">
        <input type="range" min="1" max="500" step="10" class="w-full mt-2">
      </div>
      <div>
        <label>Pendiente/Inclinación</label>
        <select name="slope" class="w-full border rounded p-2">
          <option>Plana</option><option>1–5°</option><option>6–15°</option><option>> 15°</option>
        </select>
      </div>
      <div>
        <label>Estado actual</label>
        <textarea name="current_condition" rows="2" class="w-full border rounded p-2"></textarea>
      </div>
      <div>
        <label>Última intervención (año)</label>
        <input name="last_intervention_year" type="number" min="1900" max="{{ now()->year }}"
               class="w-full border rounded p-2">
      </div>
      <div>
        <label>Fotos o video (máx 5)</label>
        <input name="media[]" type="file" accept="image/*,video/mp4" multiple
               class="w-full border rounded p-2">
      </div>
    </div>

    {{-- Paso 3 --}}
    <div x-show="step===3" x-cloak class="space-y-4">
      <h2 class="text-xl font-bold">Paso 3 · Accesibilidad & logística</h2>
      <div>
        <label>Altura de trabajo</label>
        <select name="height" class="w-full border rounded p-2">
          <option>< 3 m</option><option>3-6 m</option><option>7-10 m</option><option>> 10 m</option>
        </select>
      </div>
      <div>
        <label>Vías de acceso</label>
        <textarea name="access_info" rows="2" class="w-full border rounded p-2"></textarea>
      </div>
      <div>
        <span>Espacio para equipo:</span><br>
        <label><input type="radio" name="equipment_space" value="Sí"> Sí</label>
        <label class="ml-4"><input type="radio" name="equipment_space" value="No"> No</label>
      </div>
      <div>
        <label>Horario disponible</label><br>
        @foreach(['L-V 8-18 h','Sáb','Dom','Nocturno'] as $h)
          <label class="inline-flex items-center mr-4">
            <input type="checkbox" name="work_hours[]" value="{{ $h }}"> <span class="ml-1">{{ $h }}</span>
          </label>
        @endforeach
      </div>
      <div>
        <label>Disponibilidad eléctrica y agua</label><br>
        @foreach(['Electricidad','Agua'] as $u)
          <label class="inline-flex items-center mr-4">
            <input type="checkbox" name="utilities[]" value="{{ $u }}"> <span class="ml-1">{{ $u }}</span>
          </label>
        @endforeach
      </div>
      <div>
        <label>Permisos internos</label>
        <select x-model="perm" name="internal_permissions" class="w-full border rounded p-2">
          <option>Ninguno</option><option>Administración</option><option>Condominio</option><option>Otro</option>
        </select>
        <template x-if="perm==='Otro'">
          <input name="internal_permissions_other" placeholder="Especifica..." class="w-full border rounded p-2 mt-2">
        </template>
      </div>
    </div>

    {{-- Paso 4 --}}
    <div x-show="step===4" x-cloak class="space-y-4">
      <h2 class="text-xl font-bold">Paso 4 · Ubicación & costos de traslado</h2>
      <div>
        <label>Dirección</label>
        <input id="address-autocomplete" name="address" type="text" class="w-full border rounded p-2">
      </div>
      <input type="hidden" name="latitude" id="latitude">
      <input type="hidden" name="longitude" id="longitude">
      <input type="hidden" name="distance_km" id="distance_km">
      <input type="hidden" name="tolls" id="tolls">
      <div>
        <span>¿Requiere pernocta?</span><br>
        <label><input type="radio" x-model="overnight" name="overnight_required" value="Sí"> Sí</label>
        <label class="ml-4"><input type="radio" x-model="overnight" name="overnight_required" value="No"> No</label>
      </div>
      <template x-if="overnight==='Sí'">
        <div>
          <label>N.º de noches</label>
          <input name="nights" type="number" min="1" class="w-full border rounded p-2">
        </div>
      </template>
    </div>

    {{-- Paso 5 --}}
    <div x-show="step===5" x-cloak class="space-y-4">
      <h2 class="text-xl font-bold">Paso 5 · Riesgos y requerimientos especiales</h2>
      <div>
        <label>Elementos sensibles cerca</label><br>
        @foreach(['Paneles solares','Cableado eléctrico','Tanques gas','Maquinaria','Ninguno'] as $e)
          <label class="inline-flex items-center mr-4">
            <input type="checkbox" name="sensitive_elements[]" value="{{ $e }}"> <span class="ml-1">{{ $e }}</span>
          </label>
        @endforeach
      </div>
      <div>
        <label>Condiciones ambientales</label>
        <select name="env_conditions" class="w-full border rounded p-2">
          <option>Viento fuerte</option><option>Alta humedad</option>
          <option>Temperatura extrema</option><option>Ninguna</option>
        </select>
      </div>
      <div>
        <label>Materiales peligrosos</label>
        <select name="hazardous_materials" class="w-full border rounded p-2">
          <option>Amianto</option><option>Químicos</option><option>Ninguno</option>
        </select>
      </div>
      <div>
        <label>Seguro / certificado requerido</label>
        <select x-model="ins" name="insurance_required" class="w-full border rounded p-2">
          <option>Ninguno</option><option>RC 1 M MXN</option>
          <option>RC 5 M</option><option>Otro</option>
        </select>
        <template x-if="ins==='Otro'">
          <input name="insurance_required_other" placeholder="Especifica..." class="w-full border rounded p-2 mt-2">
        </template>
      </div>
    </div>

    {{-- Paso 6 --}}
    <div x-show="step===6" x-cloak class="space-y-4">
      <h2 class="text-xl font-bold">Paso 6 · Expectativas y presupuesto</h2>
      <div>
        <label>Problema principal a resolver</label>
        <textarea name="issue" rows="2" class="w-full border rounded p-2"></textarea>
      </div>
      <div>
        <label>Plazo deseado de inicio</label>
        <input name="start_date" type="date"
               min="{{ now()->addDays(3)->toDateString() }}"
               class="w-full border rounded p-2">
      </div>
      <div>
        <label>Garantía solicitada</label>
        <select name="warranty" class="w-full border rounded p-2">
          <option>3 años</option><option>5 años</option><option>10 años</option>
        </select>
      </div>
      <div>
        <label>Presupuesto aproximado</label>
        <select name="budget" class="w-full border rounded p-2">
          <option>< $30 k</option><option>$30-60 k</option><option>> $60 k</option><option>No sabe</option>
        </select>
      </div>
      <div>
        <label>Preferencia de material/marca</label>
        <select name="material_preference" class="w-full border rounded p-2">
          <option>Acrílico</option><option>Prefabricado</option><option>Poliuretano</option>
          <option>Poliurea</option><option>Sugerir</option>
        </select>
      </div>
    </div>

    {{-- Botones de navegación --}}
    <div class="flex justify-between mt-6">
      <button type="button"
              @click="step--"
              x-show="step>1"
              class="px-4 py-2 bg-gray-200 rounded">Anterior</button>

      <button type="button"
              @click="step++"
              x-show="step<6"
              class="px-4 py-2 bg-indigo-600 text-white rounded">Siguiente</button>

      <button type="submit"
              x-show="step===6"
              class="px-4 py-2 bg-green-600 text-white rounded">Enviar</button>
    </div>
  </form>
</div>

{{-- Incluye Alpine.js para controlar el wizard --}}
<script src="https://unpkg.com/alpinejs" defer></script>
@endsection
