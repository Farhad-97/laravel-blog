@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-body">
<a class='btn btn-success' href="{{url('/short_links')}}">Manage</a>
</div>
<form action="{{route('short_links.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"Code","type"=>"url","name"=>"txtCode"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection
