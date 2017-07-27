@if(session()->has('message'))
	<div class="alert alert-success col-lg-6 col-lg-offset-3">
		<h5><center>{{ session()->get('message' )}}</center></h5>
	</div>
@endif
