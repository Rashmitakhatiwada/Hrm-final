
 @extends('front.app')
	
 <div class="row">
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="models">
			
  @section('content')
  @if(\Session::has('success'))
  <div class="alert-alert-success">
  	<p>{{\session::get('success')}}</p>
  </div><br/>
  @endif

<table cellpadding=5 cellspacing=4 border=0 class="table">

	<thead>
		<tr>
			<td>ID</td>
			<td>User Name</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
			@foreach($roles as $role)
			<tr>
			<td>{{$role -> id}}</td>
			<td>{{$role-> name }}</td>
			<td><a href="/role/{{$role->id}}" class="btn btn-primary "> View</a></td>
			<td><a href="{{action('RoleController@edit',$role['id'])}}" class="btn btn-warning">Edit</a></td>

			<td> <form action="{{action('RoleController@destroy',$role['id'])}}" method="post">
			@csrf
			<input type="hidden" name="_method" value="DELETE">
			<button class="btn btn-danger" type="submit">DELETE</button>
		</form></td>
		</tr>
	</tbody>

	@endforeach

<tfoot>
	<tr>
		<td>Id</td>
		<td>User Name</td>
		<td></td>
	</tr>
</tfoot>

</table>
 {{$roles->links()}}
@endsection

</div>
</div>

</div>
 