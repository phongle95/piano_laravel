<?php

namespace App\Providers;
use App\sanpham;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\loaitin;
use App\news;
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
        $piano = sanpham::where('maSP',3)->with('LoaiSanPham')->orderBy('id','DESC')->limit(3)->get();
        $guitar = sanpham::where('maSP',2)->with('LoaiSanPham')->orderBy('id','DESC')->limit(3)->get();

        view::share('pianoshare',$piano);
        view::share('guitarshare',$guitar);

        $loaitin = loaitin::all();
        view::share('loaitin',$loaitin);
        $sidebar = news::orderBy('id','DESC')->offset(1)->limit(3)->get();
        view::share('sidebar',$sidebar);

    }
}
