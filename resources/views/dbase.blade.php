@extends('layout.app')

@section('body')
<div class="container">
	<h2>Table</h2>
		<p>Database</p>            
		<table class="table">
			<thead>
				<tr>
					<th>email id</th>
					<th>name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->email_id }}</td>
						<td>{{ $user->name }}</td>
						{{-- <td>{{ $user->test['name'] }}</td> --}}
					</tr>
				@endforeach
			</tbody>
		</table>
				{{ $users->links() }}
	</div>
@endsection
