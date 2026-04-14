<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'gaji_pokok'
    ];

    public function gajis()
    {
        return $this->hasMany(Gaji::class);
    }
}
