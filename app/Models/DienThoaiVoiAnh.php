<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DienThoaiVoiAnh extends Model
{
    protected $table = "listDienThoai";
    protected $primarykey='MaDT';
    public $timestamps = false;
    
}