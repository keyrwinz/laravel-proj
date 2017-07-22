@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Create new item</h1>
		<form class="form-horizontal">
		{{ csrf_field() }}
		  <fieldset>
		    <div class="form-group" action="/todo" method="post">
		      <div class="col-lg-10">
		        <textarea class="form-control" name="body" rows="5" id="textArea"></textarea>
		        <br>
		        <button type="submit" class="btn btn-success">Submit</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>
@endsection
