<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = "tblkamar";

    protected $fillable = ['idkamar','jenis','fasilitas1','fasilitas2','fasilitas3',
    'fasilitas4','fasilitas5','fasilitas6','fasilitas7','fasilitas8','fasilitas9','fasilitas10','harga'];
}
