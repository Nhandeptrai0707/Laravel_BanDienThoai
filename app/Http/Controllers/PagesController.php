<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Services\BannerServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\LoadDienThoaiController;
class PagesController extends Controller
{
    protected $loadDienThoaiController;
    public function __construct(LoadDienThoaiController $loadDienThoaiController)
    {
        $this->loadDienThoaiController = $loadDienThoaiController;
    }
    public function index(Request $request)
    {   
        $banners = BannerServices::getInstance()->getAllBanners();
        return view('index',compact('banners'));
    }
    
}
