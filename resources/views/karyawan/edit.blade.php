@extends('layouts.app')

@section('content')
<h4>Edit Karyawan</h4>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('karyawan.update',$karyawan->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="nama" value="{{ $karyawan->nama }}" class="form-control mb-2">
<input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" class="form-control mb-2">
<input type="number" name="gaji_pokok" value="{{ $karyawan->gaji_pokok }}" class="form-control mb-2">

<button class="btn btn-primary">Update</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>

</form>
@endsection