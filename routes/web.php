<?php

use App\Http\Controllers\DedicationsController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\StudiesController;
use App\Http\Controllers\UnivsController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('tailwind');
});

Route::resource('Dedications', DedicationsController::class);
Route::resource('Educations', EducationsController::class);
Route::resource('Lecturers', LecturersController::class);
Route::resource('Studies', StudiesController::class);
Route::resource('Univs', UnivsController::class);
Route::resource('Users', UsersController::class);
// // Route::middleware(['notauth'])->group(function () {
// Route::prefix('/auth')->group(function () {
//     Route::get('/redirect', function () {
//         return Socialite::driver('google')->redirect();
//     });
//     Route::get('/callback', function () {
//         $user = Socialite::driver('google')->user();
//         $user = User::where('email', $user->getEmail())->first();
//         if ($user) {
//             Auth::login($user);
//             return redirect('/home');
//         } else {
//             $user = User::create([
//                 'name' => $user->getName(),
//                 'email' => $user->getEmail(),
//                 'phone' => uniqid(),
//                 'password' => $user->getId(),
//                 'role' => 'guest',
//             ]);

//             if ($user) Auth::login($user);
//             return redirect('/home');
//         }
//     });
// });
// });