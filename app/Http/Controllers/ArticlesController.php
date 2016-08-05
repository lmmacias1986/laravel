<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Image;
use App\Category;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
    	$articles = Article::search($request->name)->orderby('id','ASC')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
            $articles->image;
        });
        return view('admin.articles.index')->with('articles',$articles);
    }
    public function create()
    {    	
        $categories = Category::orderby('name','ASC')->lists('name','id');
        $tags = Tag::orderby('name','ASC')->lists('name','id');
        
    	return view('admin.articles.create')
            ->with('categories',$categories)
            ->with('tags',$tags);
    }
    public function store(ArticleRequest $request)
    {        
        //validar si viene una imagen en el articulo
        if ( $request->file('image')){
            //manipulacion de imagenes 
            $file = $request->file('image');
            //crear nombres a las imagenes para evitar duplicadas
            $name = 'img_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
            $file->move( $path , $name );  //parametros = ruta , nombre    
        }
        
    	$articulo = new Article($request->all());        
        $articulo->user_id = \Auth::user()->id;
        $articulo->save();

        $image = new Image();
        $image->article()->associate($articulo); //associate lo que hace es obtener el id del articulo que acaba de crear
        $image->name = $name;
        $image->save();

        $articulo->tags()->sync($request->tags);  //llenamos la tabla pivote de tags y articulos , relacion muchos a muchos

        flash("Se ha registrado el articulo de forma exitosa", 'success');

        return redirect()->route('admin.articles.index');
    }
    public function show($id)
    {
    	
    }
   	public function edit($id)
    {
    	$categories = Category::orderby('name','ASC')->lists('name','id');
        $tags = Tag::orderby('name','ASC')->lists('name','id');
        //$tags = Article::tags('name','ASC')->lists('name','id');

        $articles = Article::find($id);
        return view('admin.articles.edit')
            ->with('articles',$articles)
            ->with('categories',$categories)
            ->with('tags',$tags);
    }
   	public function update(Request $request , $id)
    {
    	$articulo = Article::find($id);
        $articulo->name = $request->name;
        $articulo->save();

        flash("El arcticulo ha sido actualizado exitosamente!", "success");
        return redirect()->route('admin.articles.index');
    }
    public function destroy($id)
    { 
        $articulo = Article::find($id);
        $articulo->delete();

        flash("El articulo ha sido eliminado exitosamente!", "danger");
        return redirect()->route('admin.articles.index');
    }
}
