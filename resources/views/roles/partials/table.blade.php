<a href=" {!! route('roles.create') !!} " class="btn btn-primary m-b-2em">Nuevo Perfil</a>
<table class="table table-striped dataTable">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Display Name</th>
			<th>Descripcion</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($roles as $role)
		<tr>
			<td>{{ $role->name }}</td>
			<td> {{ $role->display_name }} </td>
			<td> {{ $role->description }} </td>
			<td>
				@role('super_admin')
				<a href=" {!! route('roles.edit', $role) !!} " class="col-xs-4"><i class="fa fa-pencil-square fa-2x"></i></a>
				
				<a class="sweetAlert" data-name=" {{ $role->name }} " href=" {!! route('roles.delete', $role) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
				@endrole
			</td>
		</tr>
		@endforeach
	</tbody>
</table>