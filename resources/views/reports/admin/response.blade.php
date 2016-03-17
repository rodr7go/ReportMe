@extends( 'layouts.layout')
@section('title')
	Agregar Reporte
@endsection
@section('styles')
	{{ asset('css/switchery.min.css') }}
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
					{!! Form::open(['url' => route('reports.store'), 'method' => 'POST']) !!}
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
										{!! Form::checkbox('status', true, false, [ 'class' => 'switchery']) !!}	
									</div>
								</div>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	{{ asset('js/switchery.min.js') }}
	<script>
		$('.select2').select2();
	</script>
@endsection