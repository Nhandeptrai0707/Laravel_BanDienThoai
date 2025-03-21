<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Services\LoginService;
use App\Services\ThongTinKhachService;
use App\Services\DienThoaiServices;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoginService::class, function ($app) {
            return LoginService::getInstance();
        });
        $this->app->singleton(ThongTinKhachService::class, function ($app) {
            return ThongTinKhachService::getInstance();
        });
        $this->app->singleton(DienThoaiServices::class, function ($app) {
            return new DienThoaiServices();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $makh = session('makh');
            $khach = $makh ? ThongTinKhachService::getInstance()->LayThongTinKhach($makh) : null;
            $view->with('khach', $khach);
        });
    }
}
