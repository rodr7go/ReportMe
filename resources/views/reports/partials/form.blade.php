{!! Form::hidden('user_id', 1 ) !!}
{!! Form::hidden('admin_id', 2 ) !!}
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
		{!! Form::label('image1', 'imagen 1') !!}
		{!! Form::file('image1', ['class' => 'form-control']) !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('image2', 'imagen 2') !!}
		{!! Form::file('image2', ['class' => 'form-control']) !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('image3', 'imagen 3') !!}
		{!! Form::file('image3', ['class' => 'form-control']) !!}
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