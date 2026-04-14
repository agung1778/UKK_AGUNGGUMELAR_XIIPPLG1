@extends('layouts.app')

@section('content')

<div class="card p-3 shadow-sm">
    <div class="d-flex justify-content-between mb-2">
        <h5>Laporan</h5>
        <a href="/laporan/export" class="btn btn-danger">Export PDF</a>
    </div>

      <table class="table table-hover">

      <thead>
          <tr>
              <th>Nama</th>
              <th>Total</th>
              <th>Potongan</th>
              <th>Bersih</th>
          </tr>
      </thead>
      <tbody>
          @foreach($gaji as $g)
          <tr>
              <td>{{ $g->karyawan->nama }}</td>
              <td>{{ $g->total_penghasilan }}</td>
              <td>{{ $g->total_potongan }}</td>
              <td>Rp {{ number_format($g->gaji_bersih) }}</td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection
