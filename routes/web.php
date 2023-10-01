<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::resource('/', PostController::class);
Route::get('/{id}/show', [PostController::class, 'show']);
Route::get('/{id}/edit', [PostController::class, 'edit']);
Route::put('{id}/update', [PostController::class, 'update']);
Route::delete('{id}/delete', [PostController::class, 'destroy']);