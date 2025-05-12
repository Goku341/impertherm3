<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\ContactSubmission;
use App\Models\ContactImage;
use App\Mail\ContactSubmissionMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('impermeabilizantes');
    }

    public function send(ContactFormRequest $request)
    {
        
        // 1. Guardar datos de la solicitud
        $submission = ContactSubmission::create($request->only(
            'first_name','last_name','email','phone','message'
        ));

        // 2. Guardar imágenes si existen
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('public/contact_images');
                $submission->images()->create([
                    'path' => str_replace('public/', 'storage/', $path)
                ]);
            }
        }

        // 3. Enviar correo
        Mail::to(config('mail.from.address'))
            ->send(new ContactSubmissionMail($submission));

        return back()->with('success', '¡Tu solicitud ha sido enviada!');
    }
}
