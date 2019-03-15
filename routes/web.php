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
Route::get('{slug}-{id}.html',['uses'=>'TrangChuController@chitiet','as'=>'Pages.chitiet'] );

//san pham
Route::get('san-pham',['uses'=>'TrangChuController@sanpham','as'=>'Pages.sanpham'] );


//gioi thieu
Route::get('gioi-thieu', function () {
    return view('Pages.gioithieu');
});


//lien he
Route::get('lien-he', function () {
    return view('Pages.lienhe');
});

//giao duc
Route::get('giao-duc', function () {
    return view('Pages.giaoduc');
});



//admin
Route::get('admin', function () {
    return view('PageAdmin.trangchu');
});

Route::get('danh-sach-san', [
    'uses' => 'sanphamcontroller@getDanhSachSanPham',
    'as' => 'PageAdmin.sanpham'
]);


Route::group(['prefix' => 'admin'], function () {

    //san pham
    Route::group(['prefix' => 'san-pham'], function() {
        //san pham
        Route::get('danh-sach', [
            'uses' => 'sanphamcontroller@getDanhSach',
            'as' => 'PageAdmin.sanpham.danhsach'
        ]);

        //them san pham
        Route::get('them', [
            'uses' => 'sanphamcontroller@getThem',
            'as' => 'PageAdmin.sanpham.them'
        ]);

        Route::post('them', [
            'uses' => 'sanphamcontroller@postThem',
            'as' => 'PageAdmin.sanpham.them'
        ]);

        Route::get('sua/{id}', [
            'uses' => 'sanphamcontroller@getSua',
            'as' => 'PageAdmin.sanpham.sua'
        ]);

        Route::post('sua/{id}', [
            'uses' => 'sanphamcontroller@postSua',
            'as' => 'PageAdmin.sanpham.sua'
        ]);

        Route::get('xoa/{id}', [
            'uses' => 'sanphamcontroller@getxoaSP',
            'as' => 'PageAdmin.sanpham.xoa'
        ]);


    });

    //danh sach loai san pham
    Route::group(['prefix' => 'loai-san-pham'], function() {

        Route::get('danh-sach', [
            'uses' => 'sanphamcontroller@getDanhSachLoai',
            'as' => 'PageAdmin.loaisanpham.danhsach'
        ]);

        Route::get('them', [
            'uses' => 'sanphamcontroller@getThemLoai',
            'as' => 'PageAdmin.loaisanpham.them'
        ]);

        Route::post('them', [
            'uses' => 'sanphamcontroller@postThemLoai',
            'as' => 'PageAdmin.loaisanpham.them'
        ]);

        Route::get('sua/{id}', [
            'as' => 'PageAdmin.loaisanpham.sua',
            'uses' => 'sanphamcontroller@getSuaLoai'

        ]);

        Route::post('sua/{id}', [
            'as' => 'PageAdmin.loaisanpham.sua',
            'uses' => 'sanphamcontroller@postSuaLoai'

        ]);

        Route::get('xoa/{id}', [
            'uses' => 'sanphamcontroller@getXoa',
            'as' => 'PageAdmin.loaisanpham.xoa'
        ]);

    });





});





Route::get('database', function() {
    Schema::create('sanpham', function ($table) {
        $table->increments('id');
        $table->string('tenSP',100);
        $table->integer('gia');
        $table->string('img');
        $table->string('tomTat');
        $table->text('MTSP');
        $table->text('TSKT');
        $table->integer('maSP');

    });
    echo "da tao xong";
});

