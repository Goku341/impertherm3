<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Imperterm')</title>

    {{-- Estilos globales --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/css/animations.css'])

</head>
<body class="bg-gray-100">

    {{-- Encabezado común --}}
    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer común --}}
    @include('partials.footer')

    {{-- Scripts globales --}}
    @vite(['resources/js/carousel.js'])
    @vite(['resources/js/animations.js'])
    @vite(['resources/js/functions.js'])
    @vite(['resources/js/contactform'])
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init();
    

    document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('images');
    const previewContainer = document.getElementById('preview-container');
    const maxFiles = 5;
    const maxSize = 2 * 1024 * 1024; // 2MB
    let storedFiles = [];

    // Manejar arrastrar y soltar
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('border-blue-500');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('border-blue-500');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('border-blue-500');
        handleFiles(e.dataTransfer.files);
    });

    // Manejar selección de archivos
    fileInput.addEventListener('change', (e) => {
        handleFiles(e.target.files);
    });

    function handleFiles(files) {
        const validFiles = [];
        
        // Validar archivos
        for (let file of files) {
            if (file.size > maxSize) {
                alert(`El archivo ${file.name} excede el tamaño máximo de 2MB`);
                continue;
            }
            validFiles.push(file);
        }

        // Validar cantidad máxima
        if (validFiles.length + storedFiles.length > maxFiles) {
            alert(`Máximo ${maxFiles} archivos permitidos`);
            return;
        }

        // Agregar a archivos almacenados
        storedFiles = [...storedFiles, ...validFiles];
        updateFileInput();
        showPreviews(validFiles);
    }

    function showPreviews(files) {
        for (let file of files) {
            const reader = new FileReader();
            reader.onload = (e) => {
                const preview = document.createElement('div');
                preview.className = 'relative';
                preview.innerHTML = `
                    <img src="${e.target.result}" class="h-24 w-full object-cover rounded">
                    <button type="button" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs hover:bg-red-600">
                        ×
                    </button>
                `;
                preview.querySelector('button').addEventListener('click', () => {
                    const index = Array.from(previewContainer.children).indexOf(preview);
                    storedFiles.splice(index, 1);
                    preview.remove();
                    updateFileInput();
                });
                previewContainer.appendChild(preview);
            };
            reader.readAsDataURL(file);
        }
    }

    function updateFileInput() {
        const dataTransfer = new DataTransfer();
        storedFiles.forEach(file => dataTransfer.items.add(file));
        fileInput.files = dataTransfer.files;
    }

    // Manejar envío del formulario
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        const btn = document.getElementById('submit-button');
        btn.innerHTML = `
            <span class="inline-block animate-spin">⏳</span> Enviando...
        `;
        btn.disabled = true;
    });
});

  document.getElementById('contact-form').addEventListener('submit', function() {
      document.getElementById('submit-button').innerHTML = 'Enviando...';
      document.getElementById('submit-button').disabled = true;
  });
    </script>
    @stack('scripts')
</body>
</html>
