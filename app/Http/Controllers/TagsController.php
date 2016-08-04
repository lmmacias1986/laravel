<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\TagRequest;
use laracasts\Flash\Flash;

class TagsController extends Controller
{
     public function index(Request $request)
    {            
    	$tags = Tag::search($request->name)->orderby('id','ASC')->paginate(5); 
        //el search es un scope creado en el modelo para validar que si trae datos la url busque esos datos unicamente
        return view('admin.tags.index')->with('tags',$tags);
    }
    public function create()
    {    	
    	return view('admin.tags.create');
    }
    public function store(TagRequest $request)
    {        
    	$tag = new Tag($request->all());        
        $tag->save();

        flash("Se ha registrado la tag de forma exitosa", 'success');

        return redirect()->route('admin.tags.index');
    }
    public function show($id)
    {
    	
    }
   	public function edit($id)
    {
    	$tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag',$tag);
    }
   	public function update(Request $request , $id)
    {
    	$tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        flash("La tag ha sido actualizado exitosamente!", "success");
        return redirect()->route('admin.tags.index');
    }
    public function destroy($id)
    { 
        $tag = Tag::find($id);
        $tag->delete();

        flash("La tag ha sido eliminado exitosamente!", "danger");
        return redirect()->route('admin.tags.index');
    }
}
