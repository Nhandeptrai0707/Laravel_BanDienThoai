<?php

namespace App\Http\Controllers;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class LoginController extends Controller
{
    public function ShowFormLogin(){
        
        return view("signin");
    }
    public function Login(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");
        try {
            $CheckDangNhap = DB::select("EXEC DangNhap @email = ?, @password = ?", [$email, $password]);
            if ($CheckDangNhap!=null){
                $makh = $CheckDangNhap[0]->makh;
                session(['makh' => $makh]);
                return redirect()->route('thanhcong')->with('makh', $makh);
            } else{
                return redirect()->route('thatbai');
            }
        } catch(QueryException $e) {
            return response()->json(['message' => 'Lỗi khi thực thi stored procedure', 'error' => $e->getMessage()]);
        }
    }
    public function thanhcong(Request $request){
        $makh = session('makh', 'Không có mã khách hàng');
        return view("thanhcong", ['makh' => $makh]);
    }
    public function thatbai(Request $request){
        return view("thatbai");
    }
}
