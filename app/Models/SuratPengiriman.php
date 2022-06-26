<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengiriman extends Model
{
    use HasFactory;
    protected $table = 'surat_pengiriman';

    protected $fillable = [
        'kode_prov',
        'kode_kab',
        'kode_kec',
        'kode_desa',
        'nbs',
        'nomor_surat',
        'created_at',
        'updated_at',
    ];
}
