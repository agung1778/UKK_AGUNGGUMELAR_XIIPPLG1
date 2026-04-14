<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required|numeric'
        ], [
            'nama.requred' => 'Nama wajib diisi!',
            'jabatan.required' => 'Jabatan wajib diisi!',
            'gaji_pokok.required' => 'Gaji pokok wajib diisi!',
            'gaji_pokok.numeric' => 'Gaji pokok harus berupa angka!'
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect()->route('karyawan.index');
    }

    public function destroy($id)
    {
        Karyawan::destroy($id);
        return redirect()->route('karyawan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }
}
