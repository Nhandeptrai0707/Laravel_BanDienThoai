<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;
class ThanhToanServices
{
    public static $instance;
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function MuaNgay($Makh,$MaDT)
    {
        try {
            $result = DB::statement('EXEC MuaNgay ?, ?', [$Makh, $MaDT]);
            return $result; 
        } catch (\Exception $e) {
            dd('Database error', $e->getMessage());
            return null;
        }
    }
    public function GioHang($Makh) {
        $giohang = DB::select("EXEC HienThiGioHangTheoMaKH ?",[$Makh]);
        return $giohang;
    }
    public function Mua($MaPT,$MaHD){
        $thanhtoan = DB::update('update HoaDon set MaPT = ?  where MaHD = ? ',[$MaPT,$MaHD]);
        return $thanhtoan;
    }
}
