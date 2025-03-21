<?php

namespace App\Http\Controllers;
use App\Services\BannerServices;
use App\Services\ThongTinKhachService;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\LoginService;
class LoginController extends Controller
{
    protected $loginService;
    protected $thongtinkhachservice;
    public function __construct(LoginService $loginService,ThongTinKhachService $thongtinkhachservice)
    {
        $this->loginService = $loginService;
        $this->thongtinkhachservice = $thongtinkhachservice;
    }
    public function ShowFormLogin()
    {    
        return view("signin");
    }
    public function Login(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");
        $makh = $this->loginService->DangNhap($email,$password);
        if($makh){    
            session(['makh' => $makh]);
            return redirect()->route('thanhcong');
        } 
        else {
            return redirect()->route('thatbai');
        }
    }
    public function thanhcong(Request $request)
    {
        $makh = session('makh');
        if (!$makh) {
            $khach = Auth::user();
            return redirect()->route('signin')->with('error', 'Vui lòng đăng nhập lại!');
        }
        $khach = $this->thongtinkhachservice->LayThongTinKhach($makh);
        if (!$khach) {
            return redirect()->route('signin')->with('error', 'Vui lòng đăng nhập lại!');
        }
        $banners = BannerServices::getInstance()->getAllBanners();
        return view('thanhcong', compact('khach','banners'));
    }
    public function thatbai(Request $request)
    {
        return view("thatbai");
    }
}
