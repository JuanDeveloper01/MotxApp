	<br>
	<div class="form-group">
		{!!Form::label('Nombre Motel: ')!!}
		{!!Form::text('motel',null,['class'=>'form-control','placeholder'=>'ingresa el nombre del motel'])!!}
	</div>	
	<div class="form-group">
		{!!Form::label('Nit: ')!!}
		{!!Form::text('nit',null,['class'=>'form-control','placeholder'=>'ingresa el nit del motel'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Direccion: ')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'ingresa la direccion '])!!}
	</div>
	<div class="form-group">
		{!!form::label('Correo: ')!!}
		{!!form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el correo'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('Usuario: ')!!}
		{!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'ingresa la direccion '])!!}
	</div>	

	<div class="form-group">
		{!!form::label('Tipo de Usuario: ')!!}
		<div class="dropdown">		
		</div>	

	<div class="form-group">
		{!!form::label('Contrase&ntilde;a: ')!!}
		{!!form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contrase&ntilde;a'])!!}
	</div>