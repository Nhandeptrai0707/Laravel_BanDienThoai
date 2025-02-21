<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;

    protected $table = 'TaiKhoan'; 

    protected $primaryKey = 'MaKH'; 

    public $timestamps = false; 

    protected $fillable = ['MaKH', 'TenTK', 'MatKhau']; 
}
