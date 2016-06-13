@extends( 'layouts.layout')
@section('title')
	Edificios
@endsection
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Edificios</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					<a href=" {!! route('buildings.create') !!} " class="btn btn-primary m-b-2em">Nuevo Edificio</a>
					<div class="table-responsive">
						@include('buildings.partials.table')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection