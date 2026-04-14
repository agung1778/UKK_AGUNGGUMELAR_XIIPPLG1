@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Slip Gaji</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .container {
            width: 700px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 5px;
        }

        .periode {
            text-align: center;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 20px;
        }

        .info table {
            width: 100%;
        }

        .info td {
            padding: 5px;
        }

        .section {
            margin-top: 15px;
        }

        .header-section {
            background: #6c8f3e;
            color: white;
            padding: 5px;
            font-weight: bold;
        }

        .box {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .flex {
            display: flex;
            justify-content: space-between;
        }

        .col {
            width: 48%;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .total {
            font-weight: bold;
            border-top: 2px solid #000;
            padding-top: 8px;
            margin-top: 10px;
        }

        .gaji-bersih {
            background: #6c8f3e;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            margin-top: 15px;
        }

    </style>
</head>
<body>

<div class="container">
    <h3>SLIP GAJI KARYAWAN</h3>
    <div class="periode">
        Periode: {{ date('d M Y') }}
    </div>
    <div class="info">
        <table>
            <tr>
                <td width="120">Nama</td>
                <td>: {{ $gaji->karyawan->nama }}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: {{ $gaji->karyawan->jabatan }}</td>
            </tr>
        </table>
    </div>

    <div class="flex">
        <div class="col">
            <div class="header-section">PENGHASILAN</div>
            <div class="box">
                <div class="row">
                    <span>Gaji Pokok</span>
                    <span>Rp {{ number_format($gaji->karyawan->gaji_pokok,0,',','.') }}</span>
                </div>
                <div class="row">
                    <span>Lembur</span>
                    <span>Rp {{ number_format($gaji->lembur,0,',','.') }}</span>
                </div>
                <div class="row total">
                    <span>Total</span>
                    <span>Rp {{ number_format($gaji->total_penghasilan,0,',','.') }}</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="header-section">POTONGAN</div>
            <div class="box">
                <div class="row">
                    <span>Pinjaman</span>
                    <span>Rp {{ number_format($gaji->pinjaman,0,',','.') }}</span>
                </div>
                <div class="row total">
                    <span>Total</span>
                    <span>Rp {{ number_format($gaji->total_potongan,0,',','.') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="gaji-bersih">
        GAJI BERSIH: Rp {{ number_format($gaji->gaji_bersih,0,',','.') }}
    </div>
</div>
</body>
</html>
@endsection