<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('display_name', 'Display name') !!}
			{!! Form::text('display_name', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('description', 'Descripcion') !!}
			{!! Form::text('description', null, [ 'class' => 'form-control' ]) !!}
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