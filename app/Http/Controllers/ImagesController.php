<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
use App\Article;
use laracasts\Flash\Flash;

class ImagesController extends Controller
{
    public function index(){
    	$images = Image::orderby('created_at','DESC')->paginate(6);

    	$images->each(function($images){
    		$images->article;
    	});
    	return view('admin.images.index')
    	->with('images',$images);
    }
}
