@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('roles.create')}}">Create</a><table class='table'>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Created At</th>
	<th>Updated At</th>

</tr>
@forelse ($roles as $role)
<tr>
	<td>{{$role->id}}</td>
	<td>{{$role->name}}</td>
	<td>{{$role->created_at}}</td>
	<td>{{$role->updated_at}}</td>

	<td>
	<div>
	<form action="{{route('roles.destroy',$role->id)}}" method="post" >
	<a class='btn btn-primary' href="{{route('roles.edit',$role->id)}}">Edit<a>
	<a class='btn btn-info' href="{{route('roles.show',$role->id)}}">Show<a>
		@csrf
		@method("DELETE")
		<input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$role->id}}"  value="Delete" />
	</form>
	</div>
	</td>
</tr>
@empty
<tr><td colspan="4">No records found</td></tr>
@endforelse
</table>
{{$roles->links()}}

@endsection
