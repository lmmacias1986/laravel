<?php

namespace App\Http\Controllers;
use App\Article;
use App\Image;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::search($request->name)->orderby('created_at','DESC')->paginate(6);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
            $articles->image = $articles->image()->lists('name')->toArray();
        }); 

        return view('home.index')
        ->with('articles',$articles);
    }
}
