@extends('layouts.app')

@section('content')

<div class="card p-3 shadow-sm">
    <div class="d-flex justify-content-between mb-2">
        <h5>Data Karyawan</h5>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">+ Tambah</a>
    </div>
    <table class="table table-hover">
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Gaji</th>
          <th>Aksi</th>
      </tr>
            @foreach($karyawan as $k)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $k->nama }}</td>
              <td>{{ $k->jabatan }}</td>
              <td>Rp {{ number_format($k->gaji_pokok) }}</td>
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