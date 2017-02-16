<?php namespace MotxApp\Http\Controllers;

use MotxApp\Http\Requests;
use MotxApp\Http\Controllers\Controller;
use MotxApp\User;
use Illuminate\Http\Request;
use Session;
use Redirect;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::All(); //trae todos los elementos de la tabla
		return view('admin.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{  
		User::create([
			'motel'=>$request['motel'],
			'nit'=>$request['nit'],
			'direccion'=>$request['direccion'],
			'email'=>$request['email'],
			'usuario'=>$request['usuario'],			
			'password'=>$request['password'],

			]);
		return redirect('\admin')->with('message','store'); 
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user= User::find($id); //con esto yo busco al usuario atreves del id :D
		return view('admin.edit',['user'=>$user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
	  $user= User::find($id);
	  $user->fill($request->all());  //aqui podras rellenar con el metodo fill
	  $user->save();
      
      Session::flash('message','usuario 5 8');
	  return redirect::to('/admin');	

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
