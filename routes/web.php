<?php

use App\Models\Tracking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackingController;
use Illuminate\Http\Request;

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

Route::redirect('/', '/tracking');

Route::get('/tracking', function (Request $request) {
    $search = $request->input('search');

    $trackings = Tracking::query();

    if ($search) {
        $trackings->where('po_number', 'like', '%' . $search . '%');
    }

    $trackings = $trackings->get();

    $tracking_starts = Tracking::query()->where('status_id', '=', 1);
    $tracking_processes = Tracking::query()->where('status_id', '=', 2);
    $tracking_finishes = Tracking::query()->where('status_id', '=', 3);

    if ($search) {
        $tracking_starts->where('po_number', 'like', '%' . $search . '%');
        $tracking_processes->where('po_number', 'like', '%' . $search . '%');
        $tracking_finishes->where('po_number', 'like', '%' . $search . '%');
    }

    // dd($tracking_starts->toSql(), $tracking_starts->getBindings());

    $tracking_starts = $tracking_starts->get();
    $tracking_processes = $tracking_processes->get();
    $tracking_finishes = $tracking_finishes->get();

    return view('welcome', compact('trackings', 'tracking_starts', 'tracking_processes', 'tracking_finishes', 'search'));
})->name('root');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [TrackingController::class, 'index'])->name('data.tracking.index');
    Route::post('/dashboard/store', [TrackingController::class, 'store'])->name('data.tracking.store');
    Route::post('/dashboard/destroy/{tracking:id}', [TrackingController::class, 'destroy'])->name('data.tracking.destroy');
    Route::post('/dashboard/tracking/{id}/edit', [TrackingController::class, 'update'])->name('data.tracking.update');
});

require __DIR__ . '/auth.php';
