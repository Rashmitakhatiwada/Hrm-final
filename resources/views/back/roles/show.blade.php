 @extends('layouts.app')
	
 <div class="row">
	<div class="col-md-10">
		<div class="agileits-w3layouts-specials" id="models">
  @section('content')

<table cellpadding=5 cellspacing=4 border=0 class="table">

			
			<tr>
			<td>ID</td> <td>{{$roles->id}}</td>
			<td>User Name</td> <td>{{$roles->name }}</td>
		</tr>
	



</table>
 
@endsection

</div>
</div>
</div>
