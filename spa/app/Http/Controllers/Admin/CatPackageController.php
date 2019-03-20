<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CatPackage;

class CatPackageController extends Controller
{
    public function index(){
    	$cats = CatPackage::all();
    	return view('admin.catpackage.index', compact('cats'));
    }
    public function getAdd(){
    	return view('admin.catpackage.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:catpackage',
    	]);
    	$name = $request->name;
    	$category = new CatPackage([
    		'name' => $name,
    	]);
    	$category->save();
    	return redirect(route('admin.catpackage.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$cat = CatPackage::find($id);
    	return view('admin.catpackage.edit', compact('cat'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:catpackage,name,'.$id,
    	]);
    	$cat = CatPackage::find($id);
    	$cat->name = $request->name;
    	$cat->update();
    	return redirect(route('admin.catpackage.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$cat = CatPackage::find($id);
    	$cat->delete();
    	return redirect(route('admin.catpackage.index'))->with('msg', 'Xoá thành công');
    }
}
