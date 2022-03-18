@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('roles.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$role->id}}</td></tr>
	<tr><th>Name</th><td>{{$role->name}}</td></tr>
	<tr><th>Created At</th><td>{{$role->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$role->updated_at}}</td></tr>

</table>

@endsection
