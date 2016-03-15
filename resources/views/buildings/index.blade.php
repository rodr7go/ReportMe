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
					<a href=" {!! route('buildings.create') !!} " class="btn btn-primary">Nuevo Edificio</a>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Calle</th>
									<th>Numero</th>
									<th>Colinia</th>
									<th>Municipio</th>
									<th>Estado</th>
									<th>Codigo Postal</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($buildings as $building)
								<tr>
									<td>{{ $building->name }}</td>
									<td>{{ $building->street }}</td>
									<td>{{ $building->number }}</td>
									<td>{{ $building->neighborhood }}</td>
									<td>{{ $building->city }}</td>
									<td>{{ $building->state }}</td>
									<td>{{ $building->zip_code }}</td>
									<td>
										<a href=" {!! route('buildings.edit', $building) !!}" style="display:inline-block; margin-right: 5px;"><i class="fa fa-pencil-square fa-2x"></i></a>
										
										<a href=" {!! route('buildings.delete', $building) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{!! $buildings->render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection