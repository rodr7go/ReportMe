@extends( 'layouts.layout')
@section('title')
	Editar Reporte
@endsection
@include('reports.partials.styles')

@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Editar Reporte</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::model($report, ['url' => route('reports.update', $report), 'method' => 'PUT', 'files' => 'true']) !!}
						@include('reports.partials.form', [ 'submit_text' => 'Editar' ])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@include('reports.partials.scripts')
	