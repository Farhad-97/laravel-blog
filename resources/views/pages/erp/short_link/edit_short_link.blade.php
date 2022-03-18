@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-header">
<a class='btn btn-success' href="{{url('/short_links')}}">Manage</a>
</div>
<form action="{{route('short_links.update',$short_link)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! input_field(["label"=>"Code","name"=>"txtCode","value"=>$short_link->code]) !!}
	{!! input_field(["label"=>"Link","name"=>"txtLink","value"=>$short_link->link]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>
</div>

@endsection
