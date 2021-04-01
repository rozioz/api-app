<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SambungBaru extends Model
{
    //use HasFactory;
    protected $table = "sambung_baru";
    protected $fillable = [
        'sb_trx',
        'sb_nama',
        'sb_telp',
        'sb_alamat',
        'sb_long',
        'sb_lat',
        'sb_status_tanah',
        'sb_tgl_daftar',
    ];
}
