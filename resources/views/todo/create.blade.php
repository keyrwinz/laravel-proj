@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Create new item</h1>
		<form class="form-horizontal" action="/todo" method="post"">
		{{ csrf_field() }}
		  <fieldset>
		    <div class="form-group">
				<div class="col-lg-10">
					<input type="text" class="form-control" name="title" placeholder="Title">
					<br>
				</div>
				<div class="col-lg-10">
					<textarea class="form-control" name="body" rows="5" id="textArea" placeholder="Body"></textarea>
					<br>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
		    </div>
		    @if ($errors->any())
		    	<div class="alert alert-danger">
			    	@foreach($errors->all() as $error)
				    		{{ $error }}
				    @endforeach
			    </div>
			@endif
		  </fieldset>
		</form>
	</div>
@endsection
