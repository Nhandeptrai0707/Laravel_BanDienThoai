<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\DienThoaiServices;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\View;
class LoadDienThoaiController extends Controller
{
  protected $dienthoaiservices;
  public function __construct(DienThoaiServices $dienThoaiServices)
  {
    $this->dienThoaiServices = $dienThoaiServices;
  }
  public function LoadDienThoaiVaAnh(Request $request)
  {
    try {
      $dienthoais = $this->dienThoaiServices->LoadDienThoaiVaAnh($request->limit, $request->start);
      if ($dienthoais->isEmpty()) {
        return response()->json(['html' => null]);
      }
      $output = '';
      foreach ($dienthoais as $dienthoai) {
        $output .= '
          <a href="chitietdienthoai/' . $dienthoai->MaDT . '" class="block h-full">
    <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 flex flex-col h-full">
        <div class="text-sm text-gray-500 mb-2">
            Trả chậm 0%
        </div>
        <div class="overflow-hidden h-40">
            <img alt="' . $dienthoai->TenDT . '" 
                class="w-full h-full object-cover rounded mb-4 transform transition duration-300 hover:scale-110" 
                src="' . $dienthoai->URLAnh . '"/>
        </div>
        <div class="text-lg font-bold mb-2 h-14 overflow-hidden">
            ' . $dienthoai->TenDT . '
        </div>
        <div class="mt-auto">
            <div class="text-red-500 text-xl font-bold mb-2">
                ' . number_format($dienthoai->Gia, 0, ',', '.') . '₫
            </div>
            <div class="text-gray-500 line-through mb-2">
                ' . number_format($dienthoai->Gia * 1.1, 0, ',', '.') . '₫
            </div>
            <div class="text-gray-700 mb-2">
                Tiết kiệm ' . number_format($dienthoai->Gia * 0.1, 0, ',', '.') . '₫
            </div>
        </div>
    </div>
</a>';
      }
      return response()->json(['html' => $output]);
    } catch (\Exception $e) {
      return response()->json(['error' => $e->getMessage()], 500);

    }
  }

  public function LoadDienThoaiVaAnhTheoMaLoai(Request $request, $maloai)
  {
    try {
      $dienthoais = $this->dienThoaiServices->LoadDienThoaiVaAnhTheoMaLoai($request->limit, $request->start, $maloai);
      if (empty($dienthoais)) {
        return response()->json(['html' => null]);
      }
      $output = '';
      foreach ($dienthoais as $dienthoai) {
        $output .= '
          <a href="chitietdienthoai/' . $dienthoai->MaDT . '" class="block h-full">
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300 flex flex-col h-full">
            <div class="text-sm text-gray-500 mb-2">
                Trả chậm 0%
            </div>
            <div class="overflow-hidden h-40">
                <img alt="' . $dienthoai->TenDT . '" 
                    class="w-full h-full object-cover rounded mb-4 transform transition duration-300 hover:scale-110" 
                   src="' . $dienthoai->URLAnh . '"/>
            </div>
            <div class="text-lg font-bold mb-2 h-14 overflow-hidden">
            ' . $dienthoai->TenDT . '
            </div>
            <div class="mt-auto">
                <div class="text-red-500 text-xl font-bold mb-2">
                    ' . number_format($dienthoai->Gia, 0, ',', '.') . '₫
                </div>
                <div class="text-gray-500 line-through mb-2">
                ' . number_format($dienthoai->Gia * 1.1, 0, ',', '.') . '₫
               </div>
                <div class="text-gray-700 mb-2">
                    Tiết kiệm ' . number_format($dienthoai->Gia * 0.1, 0, ',', '.') . '₫
              </div>
            </div>
        </div>
    </a>';
      }
      return response()->json(['html' => $output]);
    } catch (\Exception $e) {
      return response()->json(['error' => $e->getMessage()], 500);

    }
  }
  public function ChiTietDienThoai(Request $request, $MaDT)
  {
    try {
      $dienthoai = $this->dienThoaiServices->ChiTietDienThoai($MaDT);
      // $anhdienthoai = $this->dienthoaiservices->ChiTietDienThoaiAnh($MaDT);
      if ($dienthoai != null) {
        $dienthoai = $this->dienThoaiServices->ChiTietDienThoai($MaDT);
        $anhdienthoai = $this->dienThoaiServices->ChiTietDienThoaiAnh($MaDT);
        return View('chitietsanpham', compact('dienthoai', 'anhdienthoai'));
      } else {
        return View('thanhcong');
      }

    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 500);
    }
  }
}


