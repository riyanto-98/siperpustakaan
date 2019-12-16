<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "tblmember";

    protected $fillable = ['nama','nim','alamat','no','email'];
}
