@extends('layouts.app')

@section('content')
<h4>Tambah Karyawan</h4>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Terjadi kesalahan:</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('karyawan.store') }}" method="POST">
@csrf

<input type="text" name="nama" placeholder="Nama" class="form-control mb-2">
<input type="text" name="jabatan" placeholder="Jabatan" class="form-control mb-2">
<input type="number" name="gaji_pokok" placeholder="Gaji Pokok" class="form-control mb-2">

<button class="btn btn-success">Simpan</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection