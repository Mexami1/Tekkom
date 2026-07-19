<?php

namespace App\Http\Controllers;

use App\Models\DailyReport;
use Illuminate\Http\Request;

class DailyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $reports = DailyReport::where('user_id', auth()->id())
        ->orderBy('tanggal', 'desc')
        ->get();

    return view('reports.index', compact('reports'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
    ]);

    DailyReport::create([
        'user_id' => auth()->id(),
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'tanggal' => now()->toDateString(),
        'status' => $request->status,
    ]);

    return back()->with('success', 'Laporan berhasil disimpan.');
}

    /**
     * Display the specified resource.
     */
    public function show(DailyReport $dailyReport)
    {
        //
    }

   /**
 * Show the form for editing the specified resource.
 */
public function edit(DailyReport $report)
{
    return view('reports.edit', compact('report'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, DailyReport $report)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
    ]);

    $report->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'status' => $request->status,
    ]);

    return redirect()->route('reports.index')
        ->with('success', 'Laporan berhasil diperbarui.');
}

   /**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $report = DailyReport::findOrFail($id);

    $report->delete();

    return redirect()->route('reports.index')
        ->with('success', 'Laporan berhasil dihapus.');
}
}