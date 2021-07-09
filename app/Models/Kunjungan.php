<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';
    protected $fillable = [
        'tahun',
        'bulan',
        'wisata_id',
        'jumlah_pengunjung'
    ];
}
