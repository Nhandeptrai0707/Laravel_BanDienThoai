<?php

namespace App\Services;

use Auth;
use Illuminate\Support\Facades\DB;

class LoginService
{
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function DangNhap($email, $password)
    {
        try {
            $CheckDangNhap = DB::select("EXEC DangNhap @email = ?, @password = ?", [$email, $password]);
            return ($CheckDangNhap && count($CheckDangNhap) > 0 && isset($CheckDangNhap[0]->makh)) 
                ? $CheckDangNhap[0]->makh 
                : null;
        } catch (\Exception $e) {
            return null;
        }
    }
}
