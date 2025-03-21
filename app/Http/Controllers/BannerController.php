<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Banner;
class BannerController extends Controller
{
    protected $loadDienThoaiController;
    public function __construct()
    {

    }
    public function LoadBanners(Request $request)
    {   
        $banners = Banner::all();
        dd($banners);
        return response()->json($banners);
    }


}