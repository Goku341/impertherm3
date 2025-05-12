document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    const submitButton = document.getElementById('submit-button');

    form.addEventListener('submit', async (e) => {
        e.preventDefault(); // Evita recarga
        submitButton.disabled = true;
        submitButton.textContent = 'Enviando...';

        const formData = new FormData(form);

        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        });

        const message = document.createElement('div');
        const closeButton = document.createElement('button');
        closeButton.innerHTML = '✕';
        closeButton.className = 'ml-auto pl-4 text-lg font-bold text-current hover:text-red-500 focus:outline-none';
        closeButton.onclick = () => message.remove();

        message.appendChild(closeButton);
        message.classList.add(
            'mb-4', 'rounded-md', 'p-4', 'text-sm', 'font-medium', 'border', 'flex', 'items-center',
            'transition-opacity', 'duration-1000', 'ease-in-out'
        );

        if (response.ok) {
            message.classList.add('bg-green-100', 'text-green-800', 'border-green-300');
            message.insertAdjacentText('afterbegin', '✅ Mensaje enviado correctamente.');
            form.parentElement.insertBefore(message, form);
            form.reset();
            
            // Desvanecer después de 10 segundos
            setTimeout(() => {
                message.classList.add('opacity-0');
                setTimeout(() => message.remove(), 1000); // espera a que termine la animación
            }, 10000);
        } else {
            message.classList.add('bg-red-100', 'text-red-800', 'border-red-300');
            message.insertAdjacentText('afterbegin', '❌ Ocurrió un error al enviar el mensaje.');
            form.parentElement.insertBefore(message, form);
        }

        submitButton.disabled = false;
        submitButton.textContent = 'Enviar Solicitud';
    });
});
