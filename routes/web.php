<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\KlantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\ProgressController;
use App\Models\Ride;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
});

Route::post('company/store', [CompanyController::class, 'store'])->name('company.store');

Route::get('ride/create', [KlantController::class, 'create'])->name('ride.create');

Route::post('ride/store', [KlantController::class, 'store'])->name('ride.store');

Route::get('prices/edit', [PricesController::class, 'edit'])->name('price.edit');

Route::put('prices/update', [PricesController::class, 'update'])->name('price.update');

Route::get('changeProgress/index', [ProgressController::class, 'index'])->name('progress.index');

Route::get('changeProgress/edit/{ride}/{user}', [ProgressController::class, 'edit'])->name('progress.edit');

Route::put('changeProgress/update/{ride}/{user}', [ProgressController::class, 'update'])->name('progress.update');

Route::delete('changeProgress/delete/{ride}/{user}', [ProgressController::class, 'delete'])->name('progress.delete');

Route::get('/dashboard', function () {
    $userRoles = Auth::user()->roles;
    if ($userRoles == 'klant') {
        $plannedRides = Ride::all()->where('progress', 'planned')->where('user_id', Auth::user()->id);
        $ongoingRides = Ride::all()->where('progress', 'ongoing')->where('user_id', Auth::user()->id);
        $executedRides = Ride::all()->where('progress', 'executed')->where('user_id', Auth::user()->id);
    } else if ($userRoles == 'admin') {
        $plannedRides = Ride::with('user')->where('progress', 'planned')->get();
        $ongoingRides = Ride::with('user')->where('progress', 'ongoing')->get();
        $executedRides = Ride::with('user')->where('progress', 'executed')->get();
    }
    return view($userRoles . '/dashboard', compact('plannedRides', 'ongoingRides', 'executedRides'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
