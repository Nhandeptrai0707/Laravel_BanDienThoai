<?php
namespace App\Services;

use App\Models\Banner;

class BannerServices
{
    public static $instance;
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getAllBanners()
    {
        return Banner::all();
    }
}
