@extends( 'layouts.layout')
@section('title')
	Agregar Reporte
@endsection
@section('styles')
	@include('reports.partials.styles')
@endsection

@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Agregar Reporte</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					{!! Form::open(['url' => route('reports.response', $report_id), 'method' => 'POST']) !!}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('answer', 'Respuesta') !!}
									{!! Form::text('answer', null, [ 'class' => 'form-control' ]) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('status', 'Status') !!}
									<div class="col-sm-11 col-md-offset-1">
										{!! Form::select('status', [ '1' => 'Pendiente', '2' => 'Finalizado', '3' => 'Rechazado' ], null, [ 'class' => 'select2']) !!}	
									</div>
								</div>
							</div>
						</div>
						<div>
							{!! Form::submit('Enviar',['class' => 'btn btn-success btn-fill']) !!}	
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	@include('reports.partials.scripts')
	<script>
		$('.select2').select2();
	</script>
@endsection