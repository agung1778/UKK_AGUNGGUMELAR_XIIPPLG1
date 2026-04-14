<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Gaji;

class LaporanController extends Controller
{
    public function index()
    {
        $gaji = Gaji::with('karyawan')->get();
        return view('laporan.index', compact('gaji'));
    }

    public function export()
    {
        $gaji = Gaji::with('karyawan')->get();
        $pdf = Pdf::loadView('laporan.pdf', compact('gaji'));

        return $pdf->download('laporan-gaji.pdf');
    }
}
