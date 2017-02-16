@extends('layouts.admin')
	@section('content')	
		{!!Form::open(['route'=>'admin.store','method'=>'POST'])!!}
      	 @include('admin.forms.adm')
	 	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!form::close()!!}
@stop		