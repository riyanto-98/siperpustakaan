<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = "tblpenerbit";

    protected $fillable = ['penerbit'];

    public function buku()
    {
        return $this->hasMany('App\buku');
    }
}

