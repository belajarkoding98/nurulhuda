<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa_ma_model extends Model
{
    protected $table = 'tb_siswa_ma';
    protected $guarded = ['id_siswa_ma'];
}