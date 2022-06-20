<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DsrtDikirim extends Model
{
    use HasFactory;
    protected $table = 'dsrt_dikirim';

    protected $fillable = [
        'kode_prov',
        'kode_kab',
        'kode_kec',
        'kode_desa',
        'nbs',
        'nus',
        'no_dsrt',
        'nomor_surat',
        'status_dikirim',
        'status_response',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'nama_sls',
        'nama_krt',

    ];
}
