{{-- resources/views/emails/datosServicio.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de Solicitud de Impermeabilización</title>
    <style>
        body { font-family: Arial, sans-serif; color:#333; line-height:1.5; }
        .container { max-width:600px; margin:auto; padding:1rem; }
        .header { background:#1f2937; color:#fff; padding:1rem; text-align:center; border-radius:4px; }
        .section { margin-top:1.5rem; }
        .section h2 { background:#e5e7eb; color:#111; padding:0.5rem; border-radius:4px; }
        .field { margin-bottom:0.75rem; }
        .field .label { font-weight:bold; }
        .images img { max-width:100%; border:1px solid #ccc; border-radius:4px; margin-bottom:0.5rem; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Solicitud de Impermeabilización</h1>
        </div>

        <div class="section">
            <h2>Paso 1 · Contacto del solicitante</h2>
            <div class="field"><span class="label">Nombre / Razón social:</span> {{ $request->full_name }}</div>
            <div class="field"><span class="label">Teléfono móvil:</span> {{ $request->mobile_phone }}</div>
            <div class="field"><span class="label">Teléfono fijo:</span> {{ $request->landline ?: '—' }}</div>
            <div class="field"><span class="label">Correo electrónico:</span> {{ $request->email }}</div>
            <div class="field"><span class="label">Contacto preferido:</span> {{ $request->preferred_contact }}</div>
        </div>

        <div class="section">
            <h2>Paso 2 · Datos técnicos de la superficie</h2>
            <div class="field"><span class="label">Tipo de superficie:</span> {{ $request->surface_type }}@if($request->surface_type === 'Otro') ({{ $request->surface_type_other }})@endif</div>
            <div class="field"><span class="label">Material actual:</span> {{ $request->surface_material }}@if($request->surface_material === 'Otro') ({{ $request->surface_material_other }})@endif</div>
            <div class="field"><span class="label">Metros cuadrados:</span> {{ $request->area }}</div>
            <div class="field"><span class="label">Pendiente/Inclinación:</span> {{ $request->slope }}</div>
            <div class="field"><span class="label">Estado actual:</span> {{ $request->current_condition }}</div>
            <div class="field"><span class="label">Última intervención (año):</span> {{ $request->last_intervention_year ?: '—' }}</div>
        </div>

        <div class="section">
            <h2>Paso 3 · Accesibilidad & logística</h2>
            <div class="field"><span class="label">Altura de trabajo:</span> {{ $request->height }}</div>
            <div class="field"><span class="label">Vías de acceso:</span> {{ $request->access_info }}</div>
            <div class="field"><span class="label">Espacio para equipo:</span> {{ $request->equipment_space }}</div>
            <div class="field"><span class="label">Horario disponible:</span> {{ implode(', ', $request->work_hours) }}</div>
            <div class="field"><span class="label">Servicios (eléctrico/agua):</span> {{ implode(', ', $request->utilities) }}</div>
            <div class="field"><span class="label">Permisos internos:</span> {{ $request->internal_permissions }}@if($request->internal_permissions === 'Otro') ({{ $request->internal_permissions_other }})@endif</div>
        </div>

        <div class="section">
            <h2>Paso 4 · Ubicación & costos de traslado</h2>
            <div class="field"><span class="label">Dirección:</span> {{ $request->address }}</div>
            <div class="field"><span class="label">Coordenadas:</span> {{ $request->latitude }}, {{ $request->longitude }}</div>
            <div class="field"><span class="label">Distancia estimada (km):</span> {{ $request->distance_km ?: '—' }}</div>
            <div class="field"><span class="label">Peajes / estacionamiento:</span> {{ $request->tolls ?: '—' }}</div>
            <div class="field"><span class="label">Requiere pernocta:</span> {{ $request->overnight_required }}@if($request->overnight_required === 'Sí') ({{ $request->nights }} noches)@endif</div>
        </div>

        <div class="section">
            <h2>Paso 5 · Riesgos y requerimientos especiales</h2>
            <div class="field"><span class="label">Elementos sensibles:</span> {{ implode(', ', $request->sensitive_elements) }}</div>
            <div class="field"><span class="label">Condiciones ambientales:</span> {{ $request->env_conditions }}</div>
            <div class="field"><span class="label">Materiales peligrosos:</span> {{ $request->hazardous_materials }}</div>
            <div class="field"><span class="label">Seguro requerido:</span> {{ $request->insurance_required }}@if($request->insurance_required === 'Otro') ({{ $request->insurance_required_other }})@endif</div>
        </div>

        <div class="section">
            <h2>Paso 6 · Expectativas y presupuesto</h2>
            <div class="field"><span class="label">Problema principal:</span> {{ $request->issue }}</div>
            <div class="field"><span class="label">Plazo inicio:</span> {{ $request->start_date }}</div>
            <div class="field"><span class="label">Garantía:</span> {{ $request->warranty }}</div>
            <div class="field"><span class="label">Presupuesto:</span> {{ $request->budget }}</div>
            <div class="field"><span class="label">Material/Marca preferida:</span> {{ $request->material_preference }}</div>
        </div>

        @if($request->media->count())
            <div class="section">
                <h2>Archivos Adjuntos</h2>
                <div class="images">
                    @foreach($request->media as $media)
                        @php
                            $cid = basename($media->file_path);
                            $fullPath = storage_path('app/public/'.$media->file_path);
                        @endphp
                        <img src="{{ $message->embed($fullPath) }}" alt="{{ $cid }}">
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</body>
</html>
