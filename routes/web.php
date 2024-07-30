<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
 
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

// Auth::routes();


// Route::get('/', function () {
//     return view('welcome');
//     // return view('admin.auth.selection');
// });


// show Guards
Route::get('/', [HomeController::class, 'index'])->name('selection');
// show Login page with [Guard]
Route::get('/login/{type}', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login.show');
// Route::post('/login',[LoginController::class,'login'])->name('login')->middleware('guest');


 //==============================Home============================
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->middleware('auth')->name('home');  
 //==============================dashboard============================
 Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware('auth')->name('dashboard');


    // Admin Guard 
    Route::group(['middleware' => ['auth:admin']], function() {

            // Route::get('/users', [UserController::class, 'users']);
            //  Route::resource('Students', 'StudentController');
    });

      //studant routs 
     Route::prefix('student')->middleware('auth:student')->group(function () {
    //    Route::view('/', 'student/empty');
     });
    //    teacher routes
     Route::prefix('teacher')->middleware('auth:teacher')->group(function () {
            Route::get('/teacher/home', [HomeController::class, 'teacherHome']);
     });
    //   parents routes
     Route::prefix('parent')->middleware('auth:parent')->group(function () {
          Route::get('/parent/home', [HomeController::class, 'parentHome']);
     });