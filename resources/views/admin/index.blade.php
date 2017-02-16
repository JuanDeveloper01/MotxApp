@extends('layouts.admin')
 
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
@section('content')
<table class="table">
	<thead>
		<th>Nombre Motel</th>
		<th>Correo</th>	
		<th>Usuario</th>
		<th>Tipo</th>
		<th>Operacion</th>
	</thead>
	@foreach($users as $user)  
	<tbody>
		<th>{{$user-> motel}}</th>
		<th>{{$user-> email}}</th>
		<th>{{$user-> usuario}}</th>
		<th>{{$user-> type_user}}</th>
		<th>{!!link_to_route('admin.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}</th>
	</tbody>
	@endforeach
</table>

@stop