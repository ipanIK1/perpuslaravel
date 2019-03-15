<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manggota extends Model
{
    protected $table = "tb_anggota";  
    public $timestamps = false;
    protected $guarded = ['kd_anggota'];
}

