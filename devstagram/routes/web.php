<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

//Rutas de crear un cuenta
Route::get('/crear-cuenta', [RegisterController::class, 'index']);
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

//Rutas relacionadas con el incio de sesión
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//Rutas para el pefil
Route::get('/editar-perfil', [PerfilController::class, 'index'])->name('perfil.index');
Route::post('/editar-perfil', [PerfilController::class, 'store'])->name('perfil.store');

//Ruta de cerrar sesión
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//Rutas de creacion de posts
Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');

//Rutas para mostrar posts
Route::get('{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');

//Rutas para almacenar los comentarios
Route::post('{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('cometarios.store');

//Ruta para eliminar publicaciones 
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

//Likes
Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');

//Seguimiento usuarios
Route::post('{user:username}/follow', [FollowerController::class, 'store'])->name('users.follow');
Route::delete('{user:username}/unfollow', [FollowerController::class, 'destroy'])->name('users.unfollow');