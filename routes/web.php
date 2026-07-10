<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DailyReportController;
use App\Models\Attendance;
use App\Models\DailyReport;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {

    $totalHadir = Attendance::where('user_id', auth()->id())
        ->where('status', 'Hadir')
        ->count();

    $statusHariIni = Attendance::where('user_id', auth()->id())
        ->whereDate('tanggal', today())
        ->first();

    $laporanBulanIni = DailyReport::where('user_id', auth()->id())
        ->whereMonth('tanggal', now()->month)
        ->whereYear('tanggal', now()->year)
        ->count();

    $laporanHariIni = DailyReport::where('user_id', auth()->id())
        ->whereDate('tanggal', today())
        ->latest()
        ->get();

    return view('dashboard', compact(
        'totalHadir',
        'statusHariIni',
        'laporanBulanIni',
        'laporanHariIni'
    ));

})->middleware('auth')->name('dashboard');


// Route yang harus login
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/absen-masuk', [AttendanceController::class, 'masuk'])
        ->name('absen.masuk');

    Route::post('/absen-pulang', [AttendanceController::class, 'pulang'])
        ->name('absen.pulang');

    Route::resource('attendance', AttendanceController::class);
    Route::resource('reports', DailyReportController::class);

});

require __DIR__.'/auth.php';