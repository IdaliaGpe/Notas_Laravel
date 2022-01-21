<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#Ejemplos
Route::get('notas', function(){
    return 'Aqui estara nuestro listado de notas';
});

Route::get('notas/actualizar', function(){
    return 'Aqui sera la vista para actualizar notas';
});

Route::get('api/notas', function(){
    return [
        'Notas' => [
            'Nombre',
            'Fecha',
            'Autor',
             ]
        ];
});

#Ejercicio. Idalia Padilla
#1
Route::get('panconqueso', function(){
    return 'El pan con queso se termino desde las 2 de la tarde';
});
#2
Route::get('gato', function(){
    return 'El gato tira las cosas desde muy temprano, la voy a regalar';
});
#3
Route::get('tacos', function(){
    return 'La taqueria de la esquina, usa carne extraña';
});
#4
Route::get('tarea', function(){
    return 'La tarea se entrega el sabado 9 de febrero del 2033';
});
#5
Route::get('manga', function(){
    return 'Las mangas del chaleco son blancas';
});