<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    // use Traits\HasCompositePrimaryKey;
    protected $table = 'sinh_vien';
    protected $primaryKey = 'ma_sinh_vien';
    public $timestamps = false;
}
