@extends('layouts.admin')
	@section('content')
		{!!Form::model($user,['route'=>['admin.update',$user->id],'method'=>'PUT'])!!}
			@include('admin.forms.adm')
	 	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!form::close()!!}
@stop