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
        try{
            $CheckDangNhap = DB::select("EXEC DangNhap @email = ?,@password =? ",[$email,$password]);
        if ($CheckDangNhap) {
            return response()->json(['message' => 'Đăng nhập thành công', 'makh' => $CheckDangNhap[0]->makh]);
        } else {
            return response()->json(['message' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
        }
        // if($email == "Nhan@gmail.com"&& $password == "111111"){
        //     return redirect("/login/nhan");
        // }else{
        //     return redirect("thatbai");
        // }
        }catch(QueryException $e){
            return response()->json(['message' => 'Lỗi khi thực thi stored procedure', 'error' => $e->getMessage()]);
        }
        
    }
    public function thanhcong(Request $request){
        return view("nhan");
    }
    public function thatbai(Request $request){
        return view("thatbai");
    }
}
