<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('street', 'Calle') !!}
			{!! Form::text('street', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('number', 'Numero') !!}
			{!! Form::text('number', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('neighborhood', 'Colonia') !!}
			{!! Form::text('neighborhood', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('city', 'Municipio') !!}
			{!! Form::text('city', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('state', 'Estado') !!}
			{!! Form::text('state', null, [ 'class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('zip_code', 'Codigo Postal') !!}
			{!! Form::text('zip_code', null, [ 'class' => 'form-control' ]) !!}
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