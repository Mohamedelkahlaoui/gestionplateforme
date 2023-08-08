<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\JeuneController;

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\PartenaireController;



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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration',[AuthManager::class, 'registration'])->name('registration');
Route::post('/registration',[AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logoutPost'])->name('logout');
Route::post('/logout', [AuthManager::class, 'logoutPost'])->name('logoutPost');
//Route::get('/dashboard', [AuthManager::class, 'dashboard'])->name('dashboard');
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', [AuthManager::class, 'home'])->name('home');
Route::get('/budgets', [AuthManager::class, 'budgets'])->name('budgets');
Route::resource('/budgets', BudgetsController::class);
Route::get('/projets', [AuthManager::class, 'projets'])->name('projets');
Route::resource('/projets', ProjetsController::class);
Route::get('/candidatures', [AuthManager::class, 'candidatures'])->name('candidatures');
Route::resource('/candidatures', CandidatureController::class);
Route::get('/jeunes', [AuthManager::class, 'jeunes'])->name('jeunes');
Route::resource('/jeunes', JeuneController::class);
Route::get('/provinces', [AuthManager::class, 'provinces'])->name('provinces');
Route::resource('/provinces', ProvinceController::class);
Route::get('/communes', [AuthManager::class, 'communes'])->name('communes');
Route::resource('/communes', CommuneController::class);
Route::get('/partenaires', [AuthManager::class, 'partenaires'])->name('partenaires');
Route::resource('/partenaires', PartenaireController::class);

