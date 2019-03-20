<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;
use Storage;

class NewsController extends Controller
{
    public function index(){
    	$news = News::with('cat')->orderBy('id', 'desc')->get();
    	return view('admin.news.index', compact('news'));
    }
    public function getAdd(){
    	$cats = Category::all();
    	return view('admin.news.add', compact('cats'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:news',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    		'picture' => 'required',
    		'img' => 'required',
    		'cat_id' => 'required',
    	]);
    	$news = new News([
    		'title' => $request->title,
            'description' => $request->description,
    		'detail' => $request->detail,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $news->picture = $picture;
        }
    	if($request->file('img') != null){
    		$path2 = $request->file('img');
			$img =  $path2->store('/', ['disk' => 'upload']);
            $news->img = $img;
        }
        $news->category_id = $request->cat_id;
        $news->keywords = $request->keywords;
    	$news->save();
    	return redirect(route('admin.news.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$cats = Category::all();
    	$news = News::find($id);
    	return view('admin.news.edit', compact('news', 'cats'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:service,title,'.$id,
    		'description' => 'required',
    		'detail' => 'required',
    	]);
    	$news = News::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$news->picture;
            unlink($file_path);
            $news->picture = $picture;
        }
    	if($request->file('img') != null){
    		$path2 = $request->file('img');
			$img =  $path2->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $img_path = $app_path.'/upload/'.$news->img;
            unlink($img_path);
            $news->img = $img;
        }
    	$news->title = $request->title;
    	$news->description = $request->description;
        $news->detail = $request->detail;
    	$news->category_id = $request->cat_id;

    	$news->update();
    	return redirect(route('admin.news.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$news = News::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$news->picture;
        $img_path = $app_path.'/upload/'.$news->img;
        unlink($file_path);
        unlink($img_path);
    	$news->delete();
    	return redirect(route('admin.news.index'))->with('msg', 'Xoá thành công');
    }
}
