<?php
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\LopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;


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

Route::resource('/sinhvien', SinhvienController::class);
// Route::resource('/score', ScoreController::class);
Route::get('/index', function () {
    if (!auth()->check()) {
        return redirect()->route('login');
    }
    return view('index');
})->name('index');





Route::resource('/lop', LopController::class);
// Route::resource('/score', ScoreController::class);
Route::get('/1', function () {
    if (!auth()->check()) {
        return redirect()->route('login');
    }
    return view('1');
})->name('1');




// Route for search
Route::get('/search', [SinhvienController::class, 'search'])->name('search');
Route::post('/search', [SinhvienController::class, 'search'])->name('search');
// Route for login
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login', [AuthenticateController::class, 'doLogin'])->name('login');

// Route for register
Route::get('/register', [AuthenticateController::class, 'register'])->name('register');
Route::post('/register', [AuthenticateController::class, 'doRegister'])->name('register');

// Route for logout
Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

