@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-header">
<a class='btn btn-success' href="{{route('users.create')}}">Create</a><table class='table'>
</div>
<tr>
	<th>Id</th>
	<th>Username</th>
	<th>Full Name</th>
	<th>Password</th>
	<th>Email</th>
	<th>Photo</th>
	<th>Mobile</th>


</tr>
@forelse ($users as $user)
<tr>
	<td>{{$user->id}}</td>
	<td>{{$user->username}}</td>
	<td>{{$user->full_name}}</td>
	<td>{{$user->password}}</td>
	<td>{{$user->email}}</td>
	<td><img src="img/{{$user->photo}}" width="150" /> </td>
	<td>{{$user->mobile}}</td>
	

	<td>
	<div>
	<form action="{{route('users.destroy',$user->id)}}" method="post" >
	<a class='btn btn-primary' href="{{route('users.edit',$user->id)}}">Edit<a>
	<a class='btn btn-info' href="{{route('users.show',$user->id)}}">Show<a>
		@csrf
		@method("DELETE")
		<input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$user->id}}"  value="Delete" />
	</form>
	</div>
	</td>
</tr>
@empty
<tr><td colspan="12">No records found</td></tr>
@endforelse
</table>
</div>
{{$users->links()}}

@endsection
