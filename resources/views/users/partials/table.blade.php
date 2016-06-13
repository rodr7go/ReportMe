<a href=" {!! route('users.create') !!} " class="btn btn-primary m-b-2em">Nuevo usuario</a>
<table class="table table-striped table-hover dataTable">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Numero</th>
			<th>Edificio</th>
			<th>Perfil</th>
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
			<td> {{ $user->roles->first()['name'] }} </td>
			<td>
				<a href=" {!! route('users.edit', $user) !!} "><i class="fa fa-pencil-square fa-2x"></i></a>
				
				<a class="sweetAlert" data-name=" {{ $user->name }} " href=" {!! route('users.delete', $user) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>