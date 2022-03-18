@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-header">
<a class='btn btn-success' href="{{route('short_links.index')}}">Manage</a>
</div>
<table class='table'>
	<tr><th>Id</th><td>{{$short_link->id}}</td></tr>
	<tr><th>Code</th><td>{{$short_link->code}}</td></tr>
	<tr><th>Link</th><td>{{$short_link->link}}</td></tr>
	<tr><th>Created At</th><td>{{$short_link->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$short_link->updated_at}}</td></tr>

</table>
</div>
@endsection
