@extends('layouts.app')

@section('content')
<div class="card p-4 shadow-sm">
<h4>Tambah Karyawan</h4>

<form action="{{ route('karyawan.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama"
        class="form-control @error('nama') is-invalid @enderror"
        value="{{ old('nama') }}">

    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Jabatan</label>
    <input type="text" name="jabatan"
        class="form-control @error('jabatan') is-invalid @enderror"
        value="{{ old('jabatan') }}">

    @error('jabatan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Gaji Pokok</label>
    <input type="number" name="gaji_pokok"
        class="form-control @error('gaji_pokok') is-invalid @enderror"
        value="{{ old('gaji_pokok') }}">

    @error('gaji_pokok')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button class="btn btn-success">Simpan</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>

</form>
</div>
@endsection