<table class="table table-striped dataTable">
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
				
				<a class="sweetAlert" data-name=" {{ $building->name}} " href=" {!! route('buildings.delete', $building) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>