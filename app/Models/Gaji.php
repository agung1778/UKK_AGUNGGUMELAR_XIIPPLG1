<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $fillable = [
        'karyawan_id',
        'lembur',
        'pinjaman',
        'total_penghasilan',
        'total_potongan',
        'gaji_bersih'
    ];
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
