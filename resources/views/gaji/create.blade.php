@extends('layouts.app')

@section('content')
<div class="card p-4 shadow-sm">
<h4>Input Gaji</h4>

<form action="{{ route('gaji.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Karyawan</label>
    <select name="karyawan_id"
        class="form-control @error('karyawan_id') is-invalid @enderror">

        <option value="">-- Pilih --</option>
        @foreach($karyawan as $k)
        <option value="{{ $k->id }}">
            {{ $k->nama }} - {{ $k->jabatan }}
        </option>
        @endforeach
    </select>

    @error('karyawan_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Lembur</label>
    <input type="number" name="lembur"
        class="form-control @error('lembur') is-invalid @enderror">

    @error('lembur')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Potongan</label>
    <input type="number" name="pinjaman"
        class="form-control @error('pinjaman') is-invalid @enderror">

    @error('pinjaman')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button class="btn btn-success">Hitung & Simpan</button>
</form>
</div>
@endsection