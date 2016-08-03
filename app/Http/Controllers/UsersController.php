<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use laracasts\Flash\Flash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderby('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users',$users);
    }
    public function create()
    {
    	return view('admin.users.create');
    }
    public function store(Request $request)
    {        
    	$user = new User($request->all());
        $user->password = bcrypt($request->password); 
        $user->save();

        flash("Se ha registrado el usuario de forma exitosa", 'success');

        return redirect()->route('admin.users.index');
    }
    public function show($id)
    {
    	
    }
   	public function edit($id)
    {
    
    }
   	public function update(Request $request , $id)
    {
    
    }
    public function destroy($id)
    {        
        $user = User::find($id);
        $user->delete();

        flash("El usuario ha sido eliminado exitosamente!", "danger");
        return redirect()->route('admin.users.index');
    }

}
