<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = "tblpenerbit";

    protected $fillable = ['penerbit'];
<<<<<<< HEAD
}
=======

    public function buku()
    {
        return $this->hasMany('App\buku');
    }
}

>>>>>>> 2c7224ae436a8c1b3b5626b3c29db445290ed8ae
