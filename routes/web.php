<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/item', [ItemController::class, 'list_item'] );
Route::get('/ajouter', [ItemController::class, 'ajouter_item'] );
Route::post('/ajouter/traitement', [ItemController::class, 'ajouter_item_traitement'] );
Route::get('/update-item/{id}', [ItemController::class, 'update_item']);
Route::post('/update/traitement', [ItemController::class, 'update_item_traitement']);
Route::get('/delete-item/{id}', [ItemController::class, 'delete_item']);
