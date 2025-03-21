<?php
namespace App\Services;
use Illuminate\Support\Facades\Auth;
use App\Models\KhachHang;
use Illuminate\Support\Facades\DB;

class ThongTinKhachService
{
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function LayThongTinKhach($makh)
    {
        if (!$makh) {
            return null;
        }
        $khach = KhachHang::where('MaKH',$makh)->first();
        if($khach){
            Auth::login($khach);
        }
        return $khach;
    }

}