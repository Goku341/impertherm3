<?php

namespace App\Mail;

use App\Models\ServiceRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

class ServiceRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    /** @var ServiceRequest */
    public $request;

    /**
     * Recibe la instancia de la solicitud creada.
     */
    public function __construct(ServiceRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Construye el correo usando la vista datosServicio y adjunta inline los archivos.
     */
    public function build()
    {
        $email = $this->subject('Nueva solicitud de impermeabilización')
                      ->view('emails.datosServicio');

        // Adjuntar cada medio (imagen o video) inline
        foreach ($this->request->media as $media) {
            $cid      = basename($media->file_path);
            $fullPath = storage_path('app/public/' . $media->file_path);

            if (File::exists($fullPath)) {
                $email->attach($fullPath, [
                    'as'          => $cid,
                    'mime'        => File::mimeType($fullPath),
                    'disposition' => 'inline',
                    'contentId'   => $cid,
                ]);
            }
        }

        return $email;
    }
}
