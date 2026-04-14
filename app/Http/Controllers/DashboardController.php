<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Gaji;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKaryawan = Karyawan::count();
        $totalGaji = Gaji::sum('gaji_bersih');
        $totalTransaksi = Gaji::count();

        return view('dashboard', compact(
            'totalKaryawan',
            'totalGaji',
            'totalTransaksi'
        ));
    }
}
