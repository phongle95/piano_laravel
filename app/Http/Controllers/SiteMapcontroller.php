<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;

class SiteMapcontroller extends Controller
{
    public function sitemap(){
        $sanpham = sanpham::all();
         return response()->view('Layouts.sitemap', [
          'sanpham' => $sanpham,
      ])->header('Content-Type', 'text/xml');
    }
}
