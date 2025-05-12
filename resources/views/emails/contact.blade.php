{{-- resources/views/emails/contact.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva solicitud de impermeabilización</title>
    <style>
        body { font-family: Arial, sans-serif; line-height:1.6; color: #333; }
        .container { max-width: 600px; margin: auto; padding: 1rem; }
        .header { background: #1f2937; color: #fff; padding: .75rem 1rem; border-radius: 4px; text-align: center; }
        .content { margin-top: 1rem; }
        .field { margin-bottom: 1rem; }
        .label { font-weight: bold; display: block; margin-bottom: .25rem; }
        .images ul { padding-left: 1.25rem; }
        .images li { margin-bottom: .5rem; }
        a { color: #2563eb; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nueva solicitud de impermeabilización</h1>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Nombre completo:</span>
                {{ $submission->first_name }} {{ $submission->last_name }}
            </div>
            <div class="field">
                <span class="label">Correo electrónico:</span>
                {{ $submission->email }}
            </div>
            <div class="field">
                <span class="label">Teléfono:</span>
                {{ $submission->phone }}
            </div>
            <div class="field">
                <span class="label">Mensaje:</span>
                <p style="margin:0;">{!! nl2br(e($submission->message)) !!}</p>
            </div>

            @if($submission->images->count())
                <div class="field images">
                    <span class="label">Imágenes adjuntas (clic para ver):</span>
                    <ul>
                        @foreach($submission->images as $img)
                            <li>
                                <a href="{{ asset($img->path) }}" target="_blank">
                                    {{ basename($img->path) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
