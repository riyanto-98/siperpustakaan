<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "tblbuku";

    protected $fillable = ['namabuku','namapengarang','penerbit','genre','jumlah'];
}
