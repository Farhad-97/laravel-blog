@extends('layout.erp.home')
@section('page')
<div class="card">
  <div class="card-header">
    <a class='btn btn-primary' href="{{route('short_links.create')}}">Create</a>
  </div>
    <table class="table table-striped">
<thead>
<tr>
	<th>Id</th>
	<th>Code</th>
	<th>Link</th>
	<th>Created At</th>
	<th>Updated At</th>
</tr>
</thead>
<tbody>
@forelse ($short_links as $short_link)
<tr>
	<td>{{$short_link->id}}</td>
	<td><a href="#">{{$short_link->code}}</a></td>
	<td><a href="{{route('short_links.index',$short_link->link)}}" target="_blank">{{route('short_links.index',$short_link->link)}}</a></td>
	<td>{{$short_link->created_at}}</td>
	<td>{{$short_link->updated_at}}</td>

	<td>
	<div>
	<form action="{{route('short_links.destroy',$short_link->id)}}" method="post" >
	<a class='btn btn-primary' href="{{route('short_links.edit',$short_link->id)}}">Edit<a>
	<a class='btn btn-info' href="{{route('short_links.show',$short_link->id)}}">Show<a>
		@csrf
		@method("DELETE")
		<input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$short_link->id}}"  value="Delete" />
	</form>
	</div>
	</td>
</tr>
@empty
<tr><td colspan="5">No records found</td></tr>
@endforelse
</tbody>
</table>
</div>



{{$short_links->links()}}

@endsection

