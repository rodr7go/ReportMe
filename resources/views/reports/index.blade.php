@extends( 'layouts.layout')
@section('title')
	Reportes
@endsection
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Reportes</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					@role(['super_admin', 'resident'])
					<a href=" {!! route('reports.create') !!} " class="btn btn-primary m-b-2em">Nuevo Reporte</a>
					@endrole
					@include('reports.partials.table')
				</div>
			</div>
		</div>
	</div>
@endsection

