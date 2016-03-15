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
					<a href=" {!! route('reports.create') !!} " class="btn btn-primary">Nuevo Reporte</a>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Asunto</th>
									<th>Descripcion</th>
									<th>Usuario</th>
									<th>Administrador</th>
									<th>Status</th>
									<th>Respuesta</th>
								</tr>
							</thead>
							<tbody>
								@foreach($reports as $report)
								<tr>
									<td>{{ $report->subject }}</td>
									<td>{{ $report->description }}</td>
									<td>{{ $report->user_id }}</td>
									<td>{{ $report->admin_id }}</td>
									<td>{{ $report->status }}</td>
									<td>{{ $report->answer }}</td>
									<td>
										<a href=" {!! route('reports.edit', $report) !!}" style="display:inline-block; margin-right: 5px;"><i class="fa fa-pencil-square fa-2x"></i></a>
										
										<a href=" {!! route('reports.delete', $report) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{!! $reports->render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection