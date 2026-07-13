<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $attendance = Attendance::where('user_id', auth()->id())
        ->orderBy('tanggal', 'desc')
        ->get();

    return view('attendance.index', compact('attendance'));
}

    /**
     * Absen Masuk
     */
    public function masuk()
    {
        Attendance::firstOrCreate(
            [
                'user_id' => auth()->id(),
                'tanggal' => now()->toDateString(),
            ],
            [
                'jam_masuk' => now()->format('H:i:s'),
                'status' => 'Hadir',
            ]
        );

        return back()->with('success', 'Absen masuk berhasil.');
    }

    /**
     * Absen Pulang
     */
    public function pulang()
{
    $attendance = Attendance::where('user_id', auth()->id())
        ->whereDate('tanggal', today())
        ->first();

    if (!$attendance) {
        return back()->with('error', 'Silakan absen masuk terlebih dahulu.');
    }

    $attendance->update([
        'jam_keluar' => now()->format('H:i:s'),
    ]);

    return back()->with('success', 'Absen pulang berhasil.');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}