<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceRequestController;

Route::get('/', function () {
    return view('impermeabilizantes'); // Nombre de tu vista principal
})->name('inicio');

Route::get('nav/impermeabilizacion_form', function () {
    return view('nav.impermeabilizacion_form');
});

Route::get('nav/contactanos', function () {
    return view('nav.contactanos');
});

Route::get('nav/nosotros', function () {
    return view('nav.nosotros');
});

Route::get('nav/proyectos', function () {
    return view('nav.proyectos');
});

Route::get('nav/servicios', function () {
    return view('nav.servicios');
});

Route::get('/contacto', [ContactController::class, 'showForm'])
     ->name('contact.form');

Route::post('/contacto', [ContactController::class, 'send'])
     ->name('contact.send');

Route::get('servicio/impermeabilizacion', [ServiceRequestController::class, 'create'])
     ->name('service.request.create');

Route::post('servicio/impermeabilizacion', [ServiceRequestController::class, 'store'])
     ->name('service.request.store');