<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::with('karyawan')->get();
        return view('gaji.index', compact('gaji'));
    }

    public function create()
    {
        $karyawan = Karyawan::all();
        return view('gaji.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'lembur' => 'required|numeric',
            'pinjaman' => 'required|numeric'
        ]);

        $karyawan = Karyawan::find($request->karyawan_id);

        $total_penghasilan = $karyawan->gaji_pokok + $request->lembur;
        $total_potongan = $request->pinjaman;
        $gaji_bersih = $total_penghasilan - $total_potongan;

        Gaji::create([
            'karyawan_id' => $request->karyawan_id,
            'lembur' => $request->lembur,
            'pinjaman' => $request->pinjaman,
            'total_penghasilan' => $total_penghasilan,
            'total_potongan' => $total_potongan,
            'gaji_bersih' => $gaji_bersih
        ]);

        return redirect()->route('gaji.index');
    }

    public function destroy($id)
    {
        Gaji::destroy($id);
        return redirect()->route('gaji.index');
    }
}
