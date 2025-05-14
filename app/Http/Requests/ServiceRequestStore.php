<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class ServiceRequestStore extends FormRequest
{
    public function rules()
    {
        $year = Carbon::now()->year;
        return [
            // Paso 1
            'full_name'             => 'required|string|min:3|max:100',
            'mobile_phone'          => ['required','regex:/^\+?[\d\s\-]{8,15}$/'],
            'landline'              => 'nullable|regex:/^\+?[\d\s\-]{8,15}$/',
            'email'                 => 'required|email:rfc',
            'preferred_contact'     => ['required', Rule::in(['Teléfono','WhatsApp','Correo'])],

            // Paso 2
            'surface_type'          => ['required', Rule::in(['Techo','Muro','Cisterna','Terraza','Canalón','Otro'])],
            'surface_type_other'    => 'required_if:surface_type,Otro|string|max:100',
            'surface_material'      => ['required', Rule::in(['Concreto','Lámina','Teja','Asfalto','Poliuretano','Otro'])],
            'surface_material_other'=> 'required_if:surface_material,Otro|string|max:100',
            'area'                  => 'required|numeric|min:1',
            'slope'                 => ['required', Rule::in(['Plana','1–5°','6–15°','> 15°'])],
            'current_condition'     => 'required|string|max:255',
            'last_intervention_year'=> "nullable|integer|min:1900|max:$year",
            'media'                 => 'nullable|array|max:5',
            'media.*'               => 'file|mimes:jpg,jpeg,png,mp4|max:5120',

            // Paso 3
            'height'                => ['required', Rule::in(['< 3 m','3-6 m','7-10 m','> 10 m'])],
            'access_info'           => 'required|string|max:500',
            'equipment_space'       => ['required', Rule::in(['Sí','No'])],
            'work_hours'            => 'required|array',
            'work_hours.*'          => 'in:L-V 8-18 h,Sáb,Dom,Nocturno',
            'utilities'             => 'required|array',
            'utilities.*'           => 'in:Electricidad,Agua',
            'internal_permissions'  => ['required', Rule::in(['Ninguno','Administración','Condominio','Otro'])],
            'internal_permissions_other' => 'required_if:internal_permissions,Otro|string|max:100',

            // Paso 4
            'address'               => 'required|string|max:255',
            'latitude'              => 'required|numeric',
            'longitude'             => 'required|numeric',
            'distance_km'           => 'nullable|numeric',
            'tolls'                 => 'nullable|numeric',
            'overnight_required'    => ['required', Rule::in(['Sí','No'])],
            'nights'                => 'required_if:overnight_required,Sí|integer|min:1',

            // Paso 5
            'sensitive_elements'    => 'required|array',
            'sensitive_elements.*'  => 'in:Paneles solares,Cableado eléctrico,Tanques gas,Maquinaria,Ninguno',
            'env_conditions'        => ['required', Rule::in(['Viento fuerte','Alta humedad','Temperatura extrema','Ninguna'])],
            'hazardous_materials'   => ['required', Rule::in(['Amianto','Químicos','Ninguno'])],
            'insurance_required'    => ['required', Rule::in(['Ninguno','RC 1 M MXN','RC 5 M','Otro'])],
            'insurance_required_other' => 'required_if:insurance_required,Otro|string|max:100',

            // Paso 6
            'issue'                 => 'required|string|max:255',
            'start_date'            => 'required|date|after:'.Carbon::now()->addDays(2)->toDateString(),
            'warranty'              => ['required', Rule::in(['3 años','5 años','10 años'])],
            'budget'                => ['required', Rule::in(['< $30 k','$30-60 k','> $60 k','No sabe'])],
            'material_preference'   => ['required', Rule::in(['Acrílico','Prefabricado','Poliuretano','Poliurea','Sugerir'])],
        ];
    }
}
