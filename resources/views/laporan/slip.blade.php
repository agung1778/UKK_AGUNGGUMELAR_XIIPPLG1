@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">

<div style="width: 400px; background:white; padding:20px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1); font-family:monospace;">

    <style>
    @media print {

        /* sembunyikan yang tidak perlu */
        .no-print,
        .sidebar,
        .navbar {
            display: none !important;
        }

        body {
            background: white;
        }

        /* pusatkan slip */
        body * {
            visibility: hidden;
        }

        #print-area, #print-area * {
            visibility: visible;
        }

        #print-area {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    }
    </style>

    <div class="mb-3 text-center no-print">
        <button onclick="window.print()" class="btn btn-primary">
            Cetak Slip
        </button>
    </div>

<div id="print-area">
    <!-- HEADER -->
    <div style="text-align:center; border-bottom:1px dashed #000; padding-bottom:10px;">
        <h5 style="margin:0;">SLIP GAJI</h5>
        <small>{{ date('d M Y H:i') }}</small>
    </div>

    <!-- INFO -->
    <div style="margin-top:10px; font-size:13px;">
        <div class="d-flex justify-content-between">
            <span>Nama</span>
            <span>{{ $gaji->karyawan->nama }}</span>
        </div>

        <div class="d-flex justify-content-between">
            <span>Jabatan</span>
            <span>{{ $gaji->karyawan->jabatan }}</span>
        </div>
    </div>

    <hr style="border-top:1px dashed #000;">

    <!-- PENGHASILAN -->
    <div style="font-size:13px;">
        <strong>Penghasilan</strong>

        <div class="d-flex justify-content-between">
            <span>Gaji Pokok</span>
            <span>{{ number_format($gaji->karyawan->gaji_pokok,0,',','.') }}</span>
        </div>

        <div class="d-flex justify-content-between">
            <span>Lembur</span>
            <span>{{ number_format($gaji->lembur,0,',','.') }}</span>
        </div>

        <div class="d-flex justify-content-between" style="font-weight:bold;">
            <span>Total</span>
            <span>{{ number_format($gaji->total_penghasilan,0,',','.') }}</span>
        </div>
    </div>

    <hr style="border-top:1px dashed #000;">

    <!-- POTONGAN -->
    <div style="font-size:13px;">
        <strong>Potongan</strong>

        <div class="d-flex justify-content-between">
            <span>Pinjaman</span>
            <span>{{ number_format($gaji->pinjaman,0,',','.') }}</span>
        </div>

        <div class="d-flex justify-content-between" style="font-weight:bold;">
            <span>Total</span>
            <span>{{ number_format($gaji->total_potongan,0,',','.') }}</span>
        </div>
    </div>

    <hr style="border-top:1px dashed #000;">

    <!-- TOTAL -->
    <div style="font-size:14px; font-weight:bold;">
        <div class="d-flex justify-content-between">
            <span>GAJI BERSIH</span>
            <span>Rp {{ number_format($gaji->gaji_bersih,0,',','.') }}</span>
        </div>
    </div>

    <hr style="border-top:1px dashed #000;">

    <!-- FOOTER -->
    <div style="text-align:center; font-size:12px;">
        <p style="margin:0;">Terima kasih</p>
        <p style="margin:0;">Slip ini sah tanpa tanda tangan</p>
    </div>

</div>
</div>
</div>

@endsection