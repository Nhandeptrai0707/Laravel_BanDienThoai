<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\ThanhToanServices;
use View;

class ThanhToanController extends Controller
{
    protected $thanhtoanservices;
    public function __construct(ThanhToanServices $thanhToanServices)
    {
        $this->thanhtoanservices = $thanhToanServices;
    }
    public function ThemVaoGioHang(Request $request){
        $MaDT = $request->input('dienthoai');
        $Makh = $request->input('khach');
        if (!$MaDT || !$Makh) {
            return response()->json([
                'message' => 'Thiếu thông tin sản phẩm hoặc khách hàng.',
            ], 400);
        }
        $result = $this->thanhtoanservices->MuaNgay($Makh, $MaDT);
        if ($result !== null && $result) {
            return response()->json([
                'message' => 'Sản phẩm đã được thêm vào giỏ hàng thành công!',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Có lỗi xảy ra khi thêm vào giỏ hàng. Vui lòng thử lại.',
            ], 500);
        }
    }
    public function MuaNgay(Request $request)
    {
        $MaDT = $request->input('dienthoai');
        $Makh = $request->input('khach');
        if (!$MaDT || !$Makh) {
            return redirect()->back()->with('error', 'Thiếu thông tin sản phẩm hoặc khách hàng.');
        }
        try {
            $result = $this->thanhtoanservices->MuaNgay($Makh, $MaDT);
            if ($result !== null && $result) { 
                return $this->GioHang($Makh);
            } else {
                return redirect()->back()->with('error', 'Có lỗi khi mua sản phẩm hoặc hóa đơn không tồn tại.');
            }
        } catch (\Exception $e) {
            dd('Exception caught', $e->getMessage());
            return redirect()->back()->with('error', 'Lỗi: ' . $e->getMessage());
        }
    }
    public function GioHang($Makh)
    {
        $giohang = $this->thanhtoanservices->GioHang($Makh);
        return view('giohang', compact('giohang'));
    }
    public function Mua(Request $request)
    {
        $MaPT = $request->input('payment_method');
        $MaHD = $request->input('MaHD');
        $TongTien = $request->input('TongTien');
        if ($MaPT == 1) {
            $this->ThanhToanVNPay($MaPT, $MaHD, $TongTien);
        } else if ($MaPT == 2) {
            $this->thanhtoanservices->Mua($MaPT,$MaHD);
            return View('thanhtoanthanhcong');
        }

    }
    public function Nhan()
    {
        return View('thanh');
    }
    public function ThanhToanVNPay($MaPT, $MaHD, $TongTien)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/vnpay_payment";
        $vnp_TmnCode = "QBDEW9HH";//Mã website tại VNPAY 
        $vnp_HashSecret = "AOUEJB961ATLFMTED1K8DYUQIKHXAEIF"; //Chuỗi bí mật
        $vnp_TxnRef = "Nhan".$MaHD; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này 
        $vnp_OrderInfo = "thanh toán đơn hàng test1";
        $vnp_OrderType = "billpayment".$MaPT;
        $vnp_Amount = intval($TongTien) * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        if (isset($fullName) && trim($fullName) != '') {
            $name = explode(' ', $fullName);
            $vnp_Bill_FirstName = array_shift($name);
            $vnp_Bill_LastName = array_pop($name);
        }
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            ,
            'message' => 'success'
            ,
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            echo ("Thành Công");
            $this->thanhtoanservices->Mua($MaPT,$MaHD);
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo ("Thất Bại");
            echo json_encode($returnData);
        }
    }

}
