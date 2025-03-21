<?php

namespace App\Services;
use App\Models\DienThoaiVoiAnh;
namespace App\Services;
use Illuminate\Support\Facades\DB;
class DienThoaiServices
{
    public static $instance;

    public function __construct() {}

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function LoadDienThoaiVaAnh($limit,$start)
    {
        // $dienthoais=  DienThoaiVoiAnh::query()->offset($start)->limit($limit)->get();
        $dienthoais = DB::select("select * from listDienThoai");
        return collect(array_slice($dienthoais, $start, $limit));
    }
    public function LoadDienThoaiVaAnhTheoMaLoai($limit,$start,$maloai){
        $dienthoais= DB::select("EXEC listDienThoaiTheoLoai @MaHang = ?",[$maloai]);
        return collect(array_slice($dienthoais, $start, $limit));
    }
    public function ChiTietDienThoai($id){
        $dienthoai = DB::selectOne("select *from DienThoai where MaDT = $id");
        return $dienthoai;
    }
    public function ChiTietDienThoaiAnh($id){
        $anhdienthoai = DB::select("select *from AnhDienThoai where MaDT = $id");
        return $anhdienthoai;
    }
}