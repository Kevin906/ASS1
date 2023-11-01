<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $table = 'sinhviens';
    protected $fillable = [
        "MaSV",
        "HoTen",    
        "NgaySinh",
        "GioiTinh",
        "SoDT",
    ];
    public function scores()
    {
        return $this->hasOne(store::class);
    }
}
