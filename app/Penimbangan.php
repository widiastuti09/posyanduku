<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    protected $table = "penimbangans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'tanggal', 'beratbadan', 'imp', 'kia', 'vitamin'  
    ];
}