@extends('layouts.app')

@section('content')
<div class="card p-3 shadow-sm">
    <div class="d-flex justify-content-between mb-2">
        <h5>Data Gaji</h5>
        <a href="{{ route('gaji.create') }}" class="btn btn-success">+ Input</a>
    </div>
    <table class="table table-hover">
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
          <a href="{{ route('gaji.edit',$g->id) }}" class="btn btn-warning">Edit</a>
          <a href="{{ route('gaji.slip',$g->id) }}" class="btn btn-info ">
              Lihat Slip
          </a>
        </td>
      </tr>
      @endforeach
    </table>
@endsection

