<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Counter;
use App\Category;
use App\News;
use App\Service;
use CarBon\CarBon;
use Cache;

class IndexController extends Controller
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
                $count->increment('author');
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('spa.index.index');
    }
    public function getContact(){
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
            $key = 'contact'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'contact'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('spa.index.contact');
    }
    public function postContact(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);
        $contact = new Contact([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);
        $contact->save();
        return redirect(route('spa.index.contact'))->with('msg', 'Gửi liên hệ thành công!');
    }
    public function aboutus(){
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
            $key = 'about'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'about'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('spa.index.aboutus');
    }
    public function picture(){
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
            $key = 'picture'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'picture'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('spa.index.picture');
    }
    public function sitemap(){
        $cats = Category::all();
        $news = News::all();
        $services = Service::all();
         return response()->view('spa.index.sitemap', [
          'cats' => $cats,
          'news' => $news,
          'services' => $services,
      ])->header('Content-Type', 'text/xml');
    }
}
