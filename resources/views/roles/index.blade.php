@extends( 'layouts.layout')
@section('title')
	Perfiles
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
					@include('roles.partials.table')
				</div>
			</div>
		</div>
	</div>
	
@endsection