@extends( 'layouts.layout')
@section('title')
	Editar Usuario
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
					{!! Form::model($user, ['url' => route('users.update', $user), 'method' => 'PUT']) !!}
						@include('users.partials.form', [ 'submit_text' => 'Editar' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection