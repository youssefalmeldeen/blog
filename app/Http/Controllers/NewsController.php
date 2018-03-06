<?php

namespace App\Http\Controllers;
use App\News;
use Response;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function fast (){
    	 $all_news = News::get();
    	 $soft_deletes = News::onlyTrashed()->get();
         return view('we',['all_news'=>$all_news , 'trashed'=>$soft_deletes]);
    }

    public function insert_news() {

    	$attribute = [

    		"title"=>trans('admin.title'),
    		"desc"=>trans('admin.desc'),
    		"add_by"=>trans('admin.add_by'),
    		"content"=>trans('admin.content'),
    		"statue"=>trans('admin.statue'),

    	];

    	$data = $this->validate(request(), [

    		"title"=>'required',
    		"desc"=>'required',
    		"add_by"=>'required',
    		"content"=>'required',
    		"statue"=>'required',


    	],[],$attribute);


    	$add = new News;
    	$add->title = Request("title");
    	$add->desc = Request("desc");
    	$add->add_by = Request("add_by");
    	$add->content = Request("content");
    	$add->status = Request("statue");
    	$add->save();
    	session()->put('message','record created');
    	return redirect('test');


    }
    public function ahmad() {
        
        $arr = ['1'=> 'data'];
        return Response::json($arr);
    }
    public function delete($id=null) {
    	if($id != null){

    		$del = News::find($id);
    		$del->delete();

    	}
    	elseif (request()->has('restore') and request()->has('id')) {
    		News::whereIn('id' , request('id'))->restore();
    	}elseif (request()->has('force') and request()->has('id')) {
    		News::whereIn('id' , request('id'))->forceDelete(request('id'));
    	}elseif (request()->has('delete') and request()->has('id')) {
    		News::destroy(request('id'));
    	}

    	
    	return redirect('test');



    }
}
