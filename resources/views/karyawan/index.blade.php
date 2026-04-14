@extends('layouts.app')

@section('content')
<a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah</a>

<table class="table mt-3">
<tr>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Gaji</th>
    <th>Aksi</th>
</tr>

@foreach($karyawan as $k)
<tr>
<td>{{ $k->nama }}</td>
<td>{{ $k->jabatan }}</td>
<td>{{ $k->gaji_pokok }}</td>
<td>
    <a href="{{ route('karyawan.edit',$k->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('karyawan.destroy',$k->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
    </form>
</td>
</tr>
@endforeach
</table>
@endsection