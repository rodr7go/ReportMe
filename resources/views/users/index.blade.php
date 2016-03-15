@extends( 'layouts.layout')
@section('title')
	Usuarios
@endsection
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Usuarios</h4>
					<!-- <p class="category"></p> -->
				</div>
				<div class="content">
					<a href=" {!! route('users.create') !!} " class="btn btn-primary">Nuevo usuario</a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Email</th>
								<th>Numero</th>
								<th>Edificio</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td> {{ $user->email }} </td>
								<td> {{ $user->apt_number }} </td>
								<td> {{ $user->buildings->first()['name'] }} </td>
								<td>
									<a href=" {!! route('users.edit', $user) !!} " class="col-xs-4"><i class="fa fa-pencil-square fa-2x"></i></a>
									
									<a href=" {!! route('users.delete', $user) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $users->render() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection