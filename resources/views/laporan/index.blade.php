@extends('layouts.app')

@section('content')

<div class="card p-3 shadow-sm">
    <div class="d-flex justify-content-between mb-2">
        <h5>Laporan</h5>
        <a href="/laporan/export" class="btn btn-danger">Export PDF</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Gaji Bersih</th>
        </tr>

        @foreach($gaji as $g)
        <tr>
            <td>{{ $g->karyawan->nama }}</td>
            <td>Rp {{ number_format($g->gaji_bersih) }}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection