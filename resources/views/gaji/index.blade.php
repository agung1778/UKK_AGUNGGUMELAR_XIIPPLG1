@extends('layout')

@section('content')
<h4>Data Gaji</h4>

<a href="{{ route('gaji.create') }}" class="btn btn-primary mb-2">Input Gaji</a>

<table class="table">
<tr>
    <th>Nama</th>
    <th>Gaji Pokok</th>
    <th>Lembur</th>
    <th>Potongan</th>
    <th>Gaji Bersih</th>
    <th>Aksi</th>
</tr>

@foreach($gaji as $g)
<tr>
<td>{{ $g->karyawan->nama }}</td>
<td>{{ $g->karyawan->gaji_pokok }}</td>
<td>{{ $g->lembur }}</td>
<td>{{ $g->total_potongan }}</td>
<td>{{ $g->gaji_bersih }}</td>
<td>
<form action="{{ route('gaji.destroy',$g->id) }}" method="POST">
@csrf
@method('DELETE')
<button class="btn btn-danger">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection