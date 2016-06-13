<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('email', 'Correo') !!}
			{!! Form::email('email', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('building_id', 'Edificio') !!}
			{!! Form::select('building_id',$buildings, $user->buildings->first()['id'], [ 'class' => 'form-control select2' ]) !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('apt_number', 'Numero de departamento') !!}
			{!! Form::text('apt_number', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('role_id', 'Perfil') !!}
			{!! Form::select('role_id',$roles, $user->roles->first()['id'], [ 'class' => 'form-control select2' ]) !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
			{!! Form::password('password_confirmation', [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>

{!! Form::submit($submit_text, [ 'class' => 'btn btn-info btn-fill pull-right' ]) !!}
<a href="{{ URL::previous() }}" class="btn btn-default pull-right">Cancelar</a>
@if ($errors->any())
	<div class="alert alert-danger col-sm-6 pull-left">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{  $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<div class="clearfix"></div>