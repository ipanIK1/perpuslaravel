<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mkoleksi extends Model
{
    protected $table = "tb_koleksi_buku";    
    public $timestamps = false;
    protected $guarded = ['kd_koleksi'];
}
