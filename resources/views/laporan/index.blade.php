@extends('layouts.app')

@section('content')
<h4>Laporan Gaji</h4>

<a href="/laporan/export" class="btn btn-danger mb-2">Export PDF</a>

<table class="table">
<tr>
    <th>Nama</th>
    <th>Total</th>
    <th>Potongan</th>
    <th>Bersih</th>
</tr>

@foreach($gaji as $g)
<tr>
<td>{{ $g->karyawan->nama }}</td>
<td>{{ $g->total_penghasilan }}</td>
<td>{{ $g->total_potongan }}</td>
<td>{{ $g->gaji_bersih }}</td>
</tr>
@endforeach
</table>
@endsection