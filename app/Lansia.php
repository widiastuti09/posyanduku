<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    protected $table = "lansias";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tanggal_register', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'rt', 'rw', 'berat_badan', 'tinggi_badan', 'lingkar_pinggang', 'tekanan_darah',
        'glukosa_darah', 'lemak_tubuh', 'imt', 'lemak_perut', 'kolestrol', 'asam_urat', 'makan_berlemak',
        'makan_manis', 'zat_adiktif', 'jelantah', 'merokok', 'olahraga', 'keterangan'
    ];
}
