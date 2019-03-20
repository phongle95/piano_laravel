<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\News;

class AjaxController extends Controller
{
    public function service(Request $request){
    	$id = $request->id;
    	$service = Service::find($id);
    	if($service->active == 0){
    		$service->active = 1;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
    	}else{
    		$service->active = 0;
    		$return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
    	}
    	$service->save();
    	return $return;
    }
    public function news(Request $request){
        $id = $request->id;
        $news = News::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
        }else{
            $news->active = 0;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
        }
        $news->save();
        return $return;
    }
}
