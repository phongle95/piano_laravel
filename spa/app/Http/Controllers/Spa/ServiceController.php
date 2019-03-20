<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Counter;
use CarBon\CarBon;
use Cache;

class ServiceController extends Controller
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
            $key = 'allservice'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'allservice'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        $services = Service::with('catpackage')->where('active', 1)->orderBy(\DB::raw('RAND()'))->get();
    	return view('spa.service.index', compact('services'));
    }
    public function service($slug){
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
            $key = 'allservice-'.$slug;
            Cache::put($key, 1, 30);
        }else{
            $key = 'allservice-'.$slug;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	$service = Service::where('slug', $slug)->with('catpackage')->first();
    	return view('spa.service.service', compact('service'));
    }
    public function learn(){
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
            $key = 'learn'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'learn'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('spa.service.learn');
    }
    public function learnskin(){
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
            $key = 'learnskin'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'learn'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
        return view('spa.service.learnskin');
    }
    public function learnxam(){
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
            $key = 'learnxam'.$counter->id;
            Cache::put($key, 1, 30);
        }else{
            $key = 'learn'.$count->id;
            if(!Cache::get($key)){
                $count->increment('page');
                Cache::put($key, 1, 30);
            }
        }
    	return view('spa.service.learnxam');
    }
}
