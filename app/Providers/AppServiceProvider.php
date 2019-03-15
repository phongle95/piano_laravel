<?php

namespace App\Providers;
use App\sanpham;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $piano = sanpham::where('maSP',1)->with('LoaiSanPham')->orderBy('id','DESC')->limit(2)->get();

        view::share('pianoshare',$piano);
    }
}
