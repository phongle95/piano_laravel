<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::pattern('id','([0-9]*)');
Route::pattern('cid','([0-9]*)');
Route::pattern('slug','(.*)');




Route::get('/', function () {
    return view('welcome');
});

//trang chu
Route::get('',['uses'=>'TrangChuController@trangchu','as'=>'Pages.trangchu'] );

//chitiet
Route::get('Dan-{slug}-{id}-ở-da-nang.html',['uses'=>'TrangChuController@chitiet','as'=>'Pages.chitiet'] );

//san pham
Route::get('piano-da-nang',['uses'=>'TrangChuController@sanpham','as'=>'Pages.sanpham'] );


//gioi thieu
Route::get('gioi-thieu-ve-salem-piano',['uses'=>'TrangChuController@gioithieu','as'=>'Pages.gioithieu'] );

//dich vu sua chua
Route::get('sua-dan-piano-tai-da-nang',['uses'=>'TrangChuController@suachua','as'=>'Pages.suachua'] );

//to chuc su kien
Route::get('to-chuc-su-kien-tai-da-nang',['uses'=>'TrangChuController@TCSK','as'=>'Pages.tochucsukien'] );

//to chuc su kien
Route::get('cho-thue-dan-piano-tai-da-nang',['uses'=>'TrangChuController@CTNC','as'=>'Pages.chothuenhaccu'] );


//lien he
Route::get('lien-he-voi-salem-piano',['uses'=>'TrangChuController@lienhe','as'=>'Pages.lienhe'] );

//giao duc
Route::get('day-hoc-dan-piano-o-da-nang',['uses'=>'TrangChuController@giaoduc','as'=>'Pages.giaoduc'] );

// tìm kiếm
Route::get('piano-da-nang-',['uses'=>'TrangChuController@timkiem','as'=>'Pages.timkiem'] );

// video
Route::get('album',['uses'=>'TrangChuController@video','as'=>'Pages.video'] );

// //tin tức
Route::get('{slug}-{id}.html',['uses'=>'TrangChuController@tintuc','as'=>'Pages.tintuc']);

Route::get('{slug}-{id}.{ma}.html', [
    'uses' => 'TrangChuController@chiTietNews',
    'as' => 'Pages.detailnews'
]);

//tim kiếm tin tức
Route::get('tim-kiem',['uses'=>'TrangChuController@search','as'=>'Pages.search']);


Route::get('login', [
    'uses' => 'Admin1controller@login',
    'as' => 'PageAdmin1.login.login'
]);

Route::post('login', [
    'uses' => 'Admin1controller@postLogin',
    'as' => 'PageAdmin1.login.login'
]);



// Route::get('admin', [
//     'uses' => 'Admin1controller@admin',
//     'as' => 'PageAdmin1.trangchu'
// ]);

Route::get('logout', [
    'uses' => 'Admin1controller@logout',
    'as' => 'PageAdmin1.logout'
]);



Route::get('sitemap.xml', [
    'uses' => 'SiteMapcontroller@sitemap',
    'as' => 'Layouts.sitemap'
]);













Route::prefix('salem-admin')->middleware('auth')->group(function () {
    Route::get('', [
        'uses' => 'Admin1controller@admin',
        'as' => 'PageAdmin1.trangchu'
    ]);

     //danh sach loai san pham
    Route::group(['prefix' => 'loai-san-pham'], function() {

        Route::get('danh-sach', [
            'uses' => 'Admin1controller@getDanhSachLoai',
            'as' => 'PageAdmin1.loaisanpham.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'Admin1controller@getThemLoai',
            'as' => 'PageAdmin1.loaisanpham.them'
        ]);

        Route::post('them', [
            'uses' => 'Admin1controller@postThemLoai',
            'as' => 'PageAdmin1.loaisanpham.them'
        ]);

        Route::get('sua/{id}', [
            'as' => 'PageAdmin1.loaisanpham.sua',
            'uses' => 'Admin1controller@getSuaLoai'

        ]);

        Route::post('sua/{id}', [
            'as' => 'PageAdmin1.loaisanpham.sua',
            'uses' => 'Admin1controller@postSuaLoai'

        ]);

        Route::get('xoa/{id}', [
            'uses' => 'Admin1controller@getXoa',
            'as' => 'PageAdmin1.loaisanpham.xoa'
        ]);

    });


     //san pham
    Route::group(['prefix' => 'san-pham'], function() {

        //san pham
        Route::get('danh-sach', [
            'uses' => 'Admin1controller@getDanhSach',
            'as' => 'PageAdmin1.sanpham.danhsach'
        ]);

        //them san pham
        Route::get('them', [
            'uses' => 'Admin1controller@getThem',
            'as' => 'PageAdmin1.sanpham.them'
        ]);

        Route::post('them', [
            'uses' => 'Admin1controller@postThem',
            'as' => 'PageAdmin1.sanpham.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'Admin1controller@getSua',
            'as' => 'PageAdmin1.sanpham.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'Admin1controller@postSua',
            'as' => 'PageAdmin1.sanpham.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'Admin1controller@getxoaSP',
            'as' => 'PageAdmin1.sanpham.xoa'
        ]);


    });


    Route::group(['prefix' => 'loai-tin'], function() {
        Route::get('danh-sach', [
            'uses' => 'Admin1controller@listLoaiTin',
            'as' => 'PageAdmin1.loaitin.danhsach'
        ]);

         Route::get('them', [
            'uses' => 'Admin1controller@getThemLoaiTin',
            'as' => 'PageAdmin1.loaitin.them'
        ]);

        Route::post('them', [
            'uses' => 'Admin1controller@posthemLoaiTin',
            'as' => 'PageAdmin1.loaitin.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'Admin1controller@getSuaLoaiTin',
            'as' => 'PageAdmin1.loaitin.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'Admin1controller@postSuaLoaiTin',
            'as' => 'PageAdmin1.loaitin.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'Admin1controller@deleteLoaiTin',
            'as' => 'PageAdmin1.loaitin.xoa'
        ]);
    });

    Route::group(['prefix' => 'tin-tuc'], function () {
        Route::get('danh-sach', [
            'uses' => 'Admin1controller@getDanhSachTin',
            'as' => 'PageAdmin1.tin.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'Admin1controller@getThemTin',
            'as' => 'PageAdmin1.tin.them'
        ]);

        Route::post('them', [
            'uses' => 'Admin1controller@postThemTin',
            'as' => 'PageAdmin1.tin.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'Admin1controller@getSuaTin',
            'as' => 'PageAdmin1.tin.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'Admin1controller@postSuaTin',
            'as' => 'PageAdmin1.tin.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'Admin1controller@getXoaTin',
            'as' => 'PageAdmin1.tin.xoa'
        ]);
    });



    Route::group(['prefix' => 'menu'], function () {

        Route::get('danh-sach', [
            'uses' => 'Admin1controller@getDanhSachMenu',
            'as' => 'PageAdmin1.menu.danhsach'
        ]);


        // Route::get('them', [
        //     'uses' => 'Admin1controller@getThemMenu',
        //     'as' => 'PageAdmin1.menu.them'
        // ]);

        // Route::post('them', [
        //     'uses' => 'Admin1controller@postThemMenu',
        //     'as' => 'PageAdmin1.menu.them'
        // ]);

        Route::get('sua/{id}', [
            'uses' => 'Admin1controller@getSuaMenu',
            'as' => 'PageAdmin1.menu.sua'
        ]);
        Route::post('sua/{id}', [
            'uses' => 'Admin1controller@postSuaMenu',
            'as' => 'PageAdmin1.menu.sua'
        ]);

    });

    Route::group(['prefix' => 'khach-hang'], function () {
        Route::get('danh-sach', [
            'uses' => 'Admin1controller@getDanhSachKhachHang',
            'as' => 'PageAdmin1.khachhang.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'Admin1controller@getThemKhachHang',
            'as' => 'PageAdmin1.khachhang.them'
        ]);


        Route::post('them', [
            'uses' => 'Admin1controller@postThemKhachHang',
            'as' => 'PageAdmin1.khachhang.them'
        ]);

        Route::get('sua-khach-hang/{id}', [
            'uses' => 'Admin1controller@getSuaKhachHang',
            'as' => 'PageAdmin1.khachhang.sua'
        ]);

        Route::post('sua-khach-hang/{id}', [
            'uses' => 'Admin1controller@postSuaKhachHang',
            'as' => 'PageAdmin1.khachhang.sua'
        ]);


        Route::get('xoa/{id}', [
            'uses' => 'Admin1controller@getXoaKhachHang',
            'as' => 'PageAdmin1.khachhang.xoa'
        ]);

    });




});
















// Route::get('database', function() {
//     Schema::create('khachhang', function ($table) {
//         $table->increments('id');
//         $table->string('tenKH',100);
//         $table->string('img',500);
//         $table->string('diaChi',500);
//         $table->string('danhGia',500);


//     });
//     echo "da tao xong";
// });

