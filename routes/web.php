<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\UserController;
use App\Models\api\Profile;
use App\Sister\Sister;

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
//    Gunakan sistem sama untuk difolder illuminate
    return Sister::index();
});

// Route::middleware(['notauth'])->group(function () {
Route::prefix('/auth')->group(function () {
    Route::get('/redirect', function () {
        return Socialite::driver('google')->redirect();
    });
    Route::get('/callback', function () {
        $user = Socialite::driver('google')->user();
        $user = User::where('email', $user->getEmail())->first();
        if ($user) {
            Auth::login($user);
            return redirect('/home');
        } else {
            $user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'phone' => uniqid(),
                'password' => $user->getId(),
                'role' => 'guest',
            ]);

            if ($user) Auth::login($user);
            return redirect('/home');
        }
    });
});
// });

Route::resource('management', ManagementController::class);

// Route::middleware(['auth'])->group(function () {
//     Route::middleware(['management', 'administrator'])->group(function () {
//         Route::prefix('/management')->group(function () {
//             Route::resource('management', ManagementController::class);
//         });
//     });
//     Route::middleware(['team', 'management', 'administrator'])->group(function () {
//         Route::prefix('/team')->group(function () {
//             Route::resource('team', TeamController::class);
//         });
//     });
//     Route::middleware(['player', 'management', 'administrator'])->group(function () {
//         Route::prefix('/player')->group(function () {
//             Route::resource('player', PlayerController::class);
//         });
//     });
// });

Route::resource('user', UserController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
