<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $fillable = [
        "MaSV",
        "HoTen",    
        "NgaySinh",
        "GioiTinh",
        "SoDT",
        //"Lop",
        // "Diem",
    ];
    public function store()
    {
        return $this->hasOne(score::class);
    }
    // Sinhvien (Student) model
    public function attributes()
    {
        return $this->hasMany(StudentAttribute::class);
    }
}
