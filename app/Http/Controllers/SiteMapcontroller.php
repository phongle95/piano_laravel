<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\news;

class SiteMapcontroller extends Controller
{
    public function sitemap(){
        $sanpham = sanpham::all();
        $news = news::all();
         return response()->view('Layouts.sitemap', [
          'sanpham' => $sanpham,
          'news' => $news,
      ])->header('Content-Type', 'text/xml');
    }
}
