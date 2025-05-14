<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequestStore;
use App\Models\ServiceRequest;
use App\Models\ServiceRequestMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestNotification;


class ServiceRequestController extends Controller
{
    public function create()
    {
        return view('servicios.impermeabilizacion_form');
    }

    public function store(ServiceRequestStore $request)
    {
        // 1) Crear registro principal
        $data = $request->validated();
        $req = ServiceRequest::create($data);
        

        // 2) Guardar archivos (hasta 5)
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('service_media', 'public');
                $req->media()->create(['file_path' => $path]);
            }
        }

        // 3) Enviar notificación por correo
        Mail::to(config('mail.from.address'))
            ->send(new ServiceRequestNotification($req));

        return back()->with('success', '¡Solicitud enviada correctamente!');
    }
}
