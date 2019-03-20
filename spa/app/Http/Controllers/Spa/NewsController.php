<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;
use App\Counter;
use CarBon\CarBon;
use Cache;

class NewsController extends Controller
{
    public function index(){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Counter::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Counter();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'index'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'index'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	$news = News::where('active', 1)->orderBy('id', 'desc')->with('cat')->paginate(3);
    	return view('spa.news.index', compact('news'));
    }
    public function news($slug){
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Counter::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Counter();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'news-'.$slug;
            Cache::put($key, 1, 30);
        }else{
            $key = 'news-'.$slug;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	$cats = Category::where('slug_name',$slug)->first();
        $name = $cats->name;
        $news = News::where('active', 1)->where('category_id', $cats->id)->with('cat')->paginate(3);
    	return view('spa.news.news', compact('news', 'name'));
    }
    public function detail($slug, $id){
    	$news = News::where('active', 1)->where('id', $id)->with('cat')->first();
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Counter::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Counter();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'news'.$counter->id.$news->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'news'.$count->id.$news->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('spa.news.detail', compact('news'));
    }
    public function search(Request $request){
        $name = $request->name;
        $news = News::where('active', 1)->where('title','like' ,'%'.$name.'%')->with('cat')->paginate(3);
        $now = Carbon::now();
        $day = $now->day;
        $month = $now->month;
        $count = Counter::where('day', $day)->where('month', $month)->first();
        if(!$count){
            $counter = new Counter();
            $counter->day = $day;
            $counter->month = $month;
            $counter->author = 1;
            $counter->page = 1;
            $counter->save();
            $key = 'search'.$counter->id.$news->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'search'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('spa.news.search', compact('news'));
    }
}
