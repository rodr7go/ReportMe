<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			{!! Form::label('subject', 'Asunto') !!}
			{!! Form::text('subject', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('description', 'Descripcion') !!}
			{!! Form::textarea('description', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('user_id', 'Usuario') !!}
			{!! Form::text('user_id', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('admin_id', 'Administrador') !!}
			{!! Form::text('admin_id', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('status', 'Status') !!}
			{!! Form::text('status', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('answer', 'Respuesta') !!}
			{!! Form::text('answer', null, [ 'class' => 'form-control' ]) !!}
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