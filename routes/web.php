<?php
// use App\Http\Controllers\homeController;
// use App\Http\Controllers\registerController;
//use App\Http\Controllers\schollController;
//use App\Http\Controllers\vavaController;
use App\Http\Controllers\newcontroller;
use App\Models\student;

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

Route::get('/index', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/form', function () {
//     return view('form');
// });

// Route::post('/register', function () {
//     return 'data sent';
// });

// Route::get('/form.blade.php', function () {
//    return view('form');
// });
// Route::get('/home.blade.php', function () {
//     return view('home');
// });
#Route::get('/index.blade.php', function () {
 #   return view('index');
#});

#Route::get('/contact', function () {
 #   return view('contact');
#});

#Route::get('/contact.blade.php', function () {
 #   return view('contact');
#});

Route::get('/logou', function () {
   return view('logou');
});

#Route::get('/home.blade.php', function () {
 #   return view('logou');
#});



// Route::get('/cont',[homeController::class,'Apr']);

// Route::get('/reg',[registerController::class,'Main']);

// Route::get('/schoolpag',[schollController::class,'App']);

// Route::post('/regist',[homeController::class,'studentData']);

#Route::get('/log', function () {
   # return view('register');
#});


Route::post('/log',[registerController::class,'Main']);

Route::get('/news', function () {
    return view('news');
});
Route::post('/new',[newcontroller::class,'sod']);
















