<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class KhachHang extends Authenticatable
{
    use HasFactory;

    protected $table = 'KhachHang';
    protected $primaryKey = 'MaKH';
    public $timestamps = false;

    protected $fillable = ['email', 'password','TenKH'];
    protected $hidden = ['password', 'remember_token'];
}
