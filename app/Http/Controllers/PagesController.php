<?php

namespace App\Http\Controllers;
use App\Models\DienThoaiVoiAnh;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class PagesController extends Controller
{
    public function index()
    {   

        $dienthoais=DienThoaiVoiAnh::all();
        return view('index', compact('dienthoais'));
    }

}
