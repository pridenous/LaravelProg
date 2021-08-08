<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);


// Route::get('profile/{name}', function($name) {
//     return view('profile', ['name' => $name]);
// });

Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);

Route::view('blog', 'blog');
Route::view('about', 'about');

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);
