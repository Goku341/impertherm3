<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ContactSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    public function __construct(ContactSubmission $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {
        $email = $this
            ->subject('Nueva solicitud de impermeabilización')
            ->view('emails.contact');
    
        foreach ($this->submission->images as $img) {
            // Reconstituye la ruta original: "public/contact_images/archivo.jpg"
            $original = Str::replaceFirst('storage/', 'public/', $img->path);
    
            // Ahora la ruta existe:
            $fullPath = storage_path("app/{$original}");
    
            if (\Illuminate\Support\Facades\File::exists($fullPath)) {
                $email->attach($fullPath, [
                    'as'   => basename($fullPath),
                    'mime' => \Illuminate\Support\Facades\File::mimeType($fullPath),
                ]);
            }
        }
    
        return $this -> view('emails.contact');
    }
    
}
