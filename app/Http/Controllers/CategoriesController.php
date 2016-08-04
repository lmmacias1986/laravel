<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use laracasts\Flash\Flash;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categorias = Category::orderby('id','ASC')->paginate(5);
        return view('admin.categories.index')->with('categorias',$categorias);
    }
    public function create()
    {    	
    	return view('admin.categories.create');
    }
    public function store(Request $request)
    {        
    	$categoria = new Category($request->all());        
        $categoria->save();

        flash("Se ha registrado la categoria de forma exitosa", 'success');

        return redirect()->route('admin.categories.index');
    }
    public function show($id)
    {
    	
    }
   	public function edit($id)
    {
    	$categoria = Category::find($id);
        return view('admin.categories.edit')->with('categoria',$categoria);
    }
   	public function update(Request $request , $id)
    {
    	$categoria = Category::find($id);
        $categoria->name = $request->name;
        $categoria->save();

        flash("La categoria ha sido actualizada exitosamente!", "success");
        return redirect()->route('admin.categories.index');
    }
    public function destroy($id)
    { 
        $cateroria = Category::find($id);
        $cateroria->delete();

        flash("La categoria ha sido eliminada exitosamente!", "danger");
        return redirect()->route('admin.categories.index');
    }
}
