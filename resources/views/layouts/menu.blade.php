<div class="sidebar" data-color="red" data-image="/img/sidebar-5.jpg">

	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="/" class="simple-text">
				Reportes
			</a>
		</div>
		<ul class="nav">
			@role(['super_admin', 'admin'])
			<li class="active">
				<a href="{!! route('users.index') !!}">
					<i class="pe-7s-user"></i>
					<p>Usuarios</p>
				</a>
			</li>
			
			<li class="active">
				<a href="{!! route('buildings.index') !!}">
					<i class="fa fa-building-o"></i>
					<p>Edificios</p>
				</a>
			</li>
			<li class="active">
				<a href="{!! route('roles.index') !!}">
					<i class="fa fa-users"></i>
					<p>Perfiles</p>
				</a>
			</li>
			@endrole
			<li class="active">
				<a href="{!! route('reports.index') !!}">
					<i class="fa fa-file-text"></i>
					<p>Reportes</p>
				</a>
			</li>
			
		</ul>
	</div>
</div>