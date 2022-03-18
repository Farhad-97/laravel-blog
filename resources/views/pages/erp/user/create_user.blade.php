@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-header">
<a class='btn btn-success' href="{{url('/users')}}">Manage</a>
</div>
<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Role Id","name"=>"cmbRoleId","table"=>$roles]) !!}
	{!! input_field(["label"=>"Username","name"=>"txtUsername"]) !!}
	{!! input_field(["label"=>"Full Name","name"=>"txtFull_name"]) !!}
	{!! input_field(["label"=>"Password","name"=>"txtPassword"]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail"]) !!}
	{!! input_field(["label"=>"Photo","type"=>"file","name"=>"filePhoto"]) !!}
	{!! input_field(["label"=>"Mobile","name"=>"txtMobile"]) !!}
	{!! input_field(["label"=>"Verify Code","name"=>"txtVerify_code"]) !!}
	{!! input_field(["label"=>"Inactive","name"=>"txtInactive"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection
