<div class="table-responsive">
	<table class="table table-striped dataTable">
		<thead>
			<tr>
				<th>Asunto</th>
				<th>Descripcion</th>
				<th>Usuario</th>
				<th>Administrador</th>
				<th>Status</th>
				<th>Respuesta</th>
				<th>Imagen 1</th>
				<th>Imagen 2</th>
				<th>Imagen 3</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($reports as $report)
			<tr>
				<td>{{ $report->subject }}</td>
				<td>{{ $report->description }}</td>
				<td>{{ $report->user->name }}</td>
				<td>{{ $report->admin->name }}</td>
				@if ($report->status == 1)
					<td><i class="fa fa-circle text-warning"></i></td>
				@elseif ( $report->status == 2 )
					<td><i class="fa fa-circle text-info"></i></td>
				@elseif ( $report->status == 3 )
					<td><i class="fa fa-circle text-danger"></i></td>
				@else
					<td><i class="fa fa-circle"></i></td>
				@endif
				<td>{{ $report->answer }}</td>
				<td>
					@if($report->image1)
					<a href="/uploads/reports/{{ $report->id}}/{{ $report->image1 }}" target="_blank">
						<img width="50" src="/uploads/reports/{{ $report->id}}/{{ $report->image1 }}" alt="{{ $report->image1 }}">
					</a>
					@endif
				</td>
				<td>
					@if($report->image2)
					<a href="/uploads/reports/{{ $report->id}}/{{ $report->image2 }}" target="_blank">
						<img width="50" src="/uploads/reports/{{ $report->id}}/{{ $report->image2 }}" alt="{{ $report->image2 }}">
					</a>
					@endif
				</td>
				<td>
					@if($report->image3)
					<a href="/uploads/reports/{{ $report->id}}/{{ $report->image3 }}" target="_blank">
						<img width="50" src="/uploads/reports/{{ $report->id}}/{{ $report->image3 }}" alt="{{ $report->image3 }}">
					</a>
					@endif
				</td>
				<td class="td-actions">
				@role('super_admin')
					<a href=" {!! route('reports.edit', $report) !!}" style="display:inline-block; margin-right: 5px;"><i class="fa fa-pencil-square fa-2x"></i></a>

					<a href=" {!! route('reports.response', $report) !!}" style="display:inline-block; margin-right: 5px;"><i class="fa fa-pencil-square-o fa-2x text-warning"></i></a>
					
					<a class="sweetAlert" data-name=" {{ $report->description }} " href=" {!! route('reports.delete', $report) !!} "><i class="fa fa-times-circle fa-2x text-danger"></i></a>
				</td>
				@endrole
				@role('admin')
					<a href=" {!! route('reports.response', $report) !!}" style="display:inline-block; margin-right: 5px;"><i class="fa fa-pencil-square-o fa-2x text-warning"></i></a>
				@endrole
				@role('resident')
					<a href=" {!! route('reports.edit', $report) !!}" style="display:inline-block; margin-right: 5px;"><i class="fa fa-pencil-square fa-2x"></i></a>
				@endrole
			</tr>
			@endforeach
		</tbody>
	</table>
</div>