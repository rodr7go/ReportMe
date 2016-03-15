@extends( 'layouts.layout')
@section('title')
	Agregar Edificio
@endsection
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Agregar Edificio</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::open(['url' => route('buildings.store'), 'method' => 'POST']) !!}
						@include('buildings.partials.form', [ 'submit_text' => 'Crear' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection