@extends('layout.app')

@section('body')
<div class="container">
	<h2>Table</h2>
		<p>Database</p>            
		<table class="table">
			<thead>
				<tr>
					<th>user id</th>
					<th>name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->user_id }}</td>
						<td>{{ $user->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
				{{ $users->links() }}
	</div>
@endsection
