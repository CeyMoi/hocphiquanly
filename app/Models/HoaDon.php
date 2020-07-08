<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use Traits\HasCompositePrimaryKey;
    protected $table = 'hoa_don';
    protected $primaryKey = ['ma_sinh_vien', 'thang_hoc_phi', 'nam_hoc_phi'];
    public $timestamps = false;
}
