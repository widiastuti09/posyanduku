<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registrasibalita;

class Penimbangan extends Model
{
    protected $table = "penimbangans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namabalita_id', 'tanggal', 'beratbadan', 'imp', 'kia', 'vitamin'  
    ];
    public function registrasibalitas()
    {
        return $this->belongsTo(Registrasibalita::class,"namabalita_id");
    }
}
