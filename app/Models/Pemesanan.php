<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_identitas',
        'jenis_kelamin',
        'tgl_pesan',
        'nama_paket',
        'durasi',
        'sarapan',
        'harga_paket',
        'harga_layanan',
        'diskon',
        'total_tagihan',
    ];
}
