@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>Total Karyawan</h5>
            <h3>{{ $totalKaryawan }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>Total Gaji</h5>
            <h3>Rp {{ number_format($totalGaji) }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>Total Laporan</h5>
            <h3>{{ $totalTransaksi }}</h3>
        </div>
    </div>

</div>

@endsection