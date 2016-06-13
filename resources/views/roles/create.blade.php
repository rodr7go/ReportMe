@extends( 'layouts.layout')
@section('title')
	Crear Perfil
@endsection
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Perfiles</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::open(['url' => route('roles.store'), 'method' => 'POST']) !!}
						@include('roles.partials.form', [ 'submit_text' => 'Crear' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection