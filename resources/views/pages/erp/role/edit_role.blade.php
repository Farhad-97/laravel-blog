@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/roles')}}">Manage</a>
<form action="{{route('roles.update',$role)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! input_field(["label"=>"Name","name"=>"txtName","value"=>$role->name]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection
