@section('scripts')
	<script src="https://cdn.jsdelivr.net/jquery.switchery/0.8.1/switchery.min.js"></script>
	<script src="{{ asset('js/select2.full.js') }}"></script>
	

	<script>
	//switchery
		var elem = document.querySelector('.switchery');
		var init = new Switchery(elem);
	</script>

	<script type="text/javascript">
	//Select2
		$(function(){
			$('.select2').select2();;
		});
	</script>
@endsection