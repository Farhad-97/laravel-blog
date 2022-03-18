@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-header">
<a class='btn btn-success' href="{{route('users.index')}}">Manage</a>
</div>
<table class='table'>
	<tr><th>Id</th><td>{{$user->id}}</td></tr>
	
	<tr><th>Username</th><td>{{$user->username}}</td></tr>
	<tr><th>Full Name</th><td>{{$user->full_name}}</td></tr>
	<tr><th>Password</th><td>{{$user->password}}</td></tr>
	<tr><th>Email</th><td>{{$user->email}}</td></tr>
	<tr><th>Photo</th><td><img src="img/{{$user->photo}}" width="150" /></td></tr>
	<tr><th>Mobile</th><td>{{$user->mobile}}</td></tr>
	
	<tr><th>Created At</th><td>{{$user->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$user->updated_at}}</td></tr>

</table>
</div>
@endsection
