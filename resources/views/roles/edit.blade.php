@extends( 'layouts.layout')
@section('title')
	Editar Perfil
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
					{!! Form::model($role, ['url' => route('roles.update', $role), 'method' => 'PUT']) !!}
						@include('roles.partials.form', [ 'submit_text' => 'Editar' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection