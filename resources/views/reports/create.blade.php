@extends( 'layouts.layout')
@section('title')
	Agregar Reporte
@endsection
@include('reports.partials.styles');


@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Agregar Reporte</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::model($report ,['url' => route('reports.store'), 'method' => 'POST', 'files' => 'true']) !!}
						@include('reports.partials.form', [ 'submit_text' => 'Crear' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
@include('reports.partials.scripts');