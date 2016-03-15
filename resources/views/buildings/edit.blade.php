@extends( 'layouts.layout')
@section('title')
	Editar Edificio
@endsection
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Editar edificio</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::model($buildings, ['url' => route('buildings.update', $buildings), 'method' => 'PUT']) !!}
						@include('buildings.partials.form', [ 'submit_text' => 'Editar' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection