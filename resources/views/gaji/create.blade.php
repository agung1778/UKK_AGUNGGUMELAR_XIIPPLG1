@extends('layout')

@section('content')
<h4>Input Gaji</h4>

<form action="{{ route('gaji.store') }}" method="POST">
@csrf

<select name="karyawan_id" class="form-control mb-2">
<option value="">-- Pilih Karyawan --</option>
@foreach($karyawan as $k)
<option value="{{ $k->id }}">{{ $k->nama }} - {{ $k->jabatan }}</option>
@endforeach
</select>

<input type="number" name="lembur" placeholder="Lembur" class="form-control mb-2">
<input type="number" name="pinjaman" placeholder="Pinjaman" class="form-control mb-2">

<button class="btn btn-success">Hitung & Simpan</button>
</form>
@endsection