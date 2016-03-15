@extends( 'layouts.layout')
@section('title')
	Crear usuario
@endsection
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Usuarios</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::model($user, ['url' => route('users.store'), 'method' => 'POST']) !!}
						@include('users.partials.form', [ 'submit_text' => 'Crear' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection