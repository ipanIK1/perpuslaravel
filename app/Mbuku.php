<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mbuku extends Model
{
    protected $table = "tb_buku";  
    public $timestamps = false;
    protected $guarded = ['kd_buku'];
}
