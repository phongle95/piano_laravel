<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Counter;
use App\Contact;
use App\News;

class IndexController extends Controller
{
    public function index(){
    	$contact = Contact::all();
    	$new = News::all();
		$counts = Counter::limit(7)->get();
    	return view('admin.index.index', compact('counts', 'new', 'contact'));
    }
    public function count(){
        $count = Counter::limit(7)->get();
        return response()->json(['data' => $count]);
    }
}
