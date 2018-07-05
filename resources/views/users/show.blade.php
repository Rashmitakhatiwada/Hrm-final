 @extends('front.app')
	
 <div class="row">
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="models">
  @section('content')

<table cellpadding=5 cellspacing=4 border=0 class="table">

			
			<tr>
			<td>ID</td> <td>{{$users -> id}}</td>
			<td>User Name</td> <td>{{$users-> name }}</td>
			<td>Email</td> <td>{{$users->email}}</td>
		</tr>


	



</table>
 
@endsection

</div>
</div>
</div>
