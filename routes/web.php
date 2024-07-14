<?php


use App\Http\Controllers\PersonaController;

Route::view('/', 'welcome')->name('inicio');
Route::view('/empresa', 'empresa')->name('empresa');
Route::view('/contacto', 'contacto')->name('contacto');

Route::resource('persona', PersonaController::class);
Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('persona.update');
Route::get('/personas/actualizar', [PersonaController::class, 'updateList'])->name('personas.updateList');
Route::get('/eliminar-personas', [PersonaController::class, 'eliminarPersonas'])->name('eliminar.personas');
