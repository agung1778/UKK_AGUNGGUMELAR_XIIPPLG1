<!DOCTYPE html>
<html>
<head>
    <title>Laporan Gaji</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h3 {
            text-align: center;
            margin-bottom: 5px;
        }

        .tanggal {
            text-align: right;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #eaeaea;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
        }

        .text-left {
            text-align: left;
        }
    </style>
</head>
<body>

<h3>LAPORAN GAJI KARYAWAN</h3>

<div class="tanggal">
    Tanggal: {{ date('d-m-Y') }}
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji Pokok</th>
            <th>Lembur</th>
            <th>Potongan</th>
            <th>Gaji Bersih</th>
        </tr>
    </thead>

    <tbody>
        @foreach($gaji as $g)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="text-left">{{ $g->karyawan->nama }}</td>
            <td>{{ $g->karyawan->jabatan }}</td>
            <td>Rp {{ number_format($g->karyawan->gaji_pokok,0,',','.') }}</td>
            <td>Rp {{ number_format($g->lembur,0,',','.') }}</td>
            <td>Rp {{ number_format($g->total_potongan,0,',','.') }}</td>
            <td>Rp {{ number_format($g->gaji_bersih,0,',','.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<br><br>

<table width="100%" style="border:none;">
    <tr style="border:none;">
        <td style="border:none; text-align:right;">
            <p>Mengetahui,</p>
            <br><br><br>
            <p>______________________</p>
        </td>
    </tr>
</table>

</body>
</html>