@if (Session::has('message'))
	<script>
		swal({
			title: "{{Session::get('title')}}", 
			text: "{{Session::get('message')}}",
			 icon: "{{ (Session::get('icon') !== null ? Session::get('icon') : 'success') }}"
			 });
	</script>
@endif