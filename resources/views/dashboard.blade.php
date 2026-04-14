@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>Total Karyawan</h5>
            <h3>{{ $totalKaryawan ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>Total Gaji</h5>
            <h3>{{ $totalGaji ?? 0 }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h5>Total Laporan</h5>
            <h3>{{ $totalLaporan ?? 0 }}</h3>
        </div>
    </div>

</div>

@endsection