<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Penduduk extends Model
{
    //
    use SoftDeletes;
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'gol_darah',
        'warga_negara'
        

    ];
}
