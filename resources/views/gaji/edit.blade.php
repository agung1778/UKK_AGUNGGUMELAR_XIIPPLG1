@extends('layouts.app')

@section('content')

<div class="card shadow-sm p-4">

<h5>Edit Data Gaji</h5>

<form action="{{ route('gaji.update',$gaji->id) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label>Karyawan</label>
    <select name="karyawan_id" class="form-control">
        @foreach($karyawan as $k)
        <option value="{{ $k->id }}"
            {{ $gaji->karyawan_id == $k->id ? 'selected' : '' }}>
            {{ $k->nama }} - {{ $k->jabatan }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Lembur</label>
    <input type="number" name="lembur"
        value="{{ $gaji->lembur }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Pinjaman</label>
    <input type="number" name="pinjaman"
        value="{{ $gaji->pinjaman }}"
        class="form-control">
</div>

<button class="btn btn-primary">Update</button>
<a href="{{ route('gaji.index') }}" class="btn btn-secondary">Kembali</a>

</form>

</div>

@endsection