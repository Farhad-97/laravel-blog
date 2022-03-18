@extends('layout.erp.home')
@section('page')
<div class="card">
<div class="card-header">
<a class='btn btn-success' href="{{url('/users')}}">Manage</a>
</div>
<form action="{{route('users.update',$user)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Role Id","name"=>"cmbRoleId","table"=>$roles,"value"=>$user->role_id]) !!}
	{!! input_field(["label"=>"Username","name"=>"txtUsername","value"=>$user->username]) !!}
	{!! input_field(["label"=>"Full Name","name"=>"txtFull_name","value"=>$user->full_name]) !!}
	{!! input_field(["label"=>"Password","name"=>"txtPassword","value"=>$user->password]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail","value"=>$user->email]) !!}
	{!! input_field(["label"=>"Photo","type"=>"file","name"=>"filePhoto"]) !!}
	{!! input_field(["label"=>"Mobile","name"=>"txtMobile","value"=>$user->mobile]) !!}
	{!! input_field(["label"=>"Verify Code","name"=>"txtVerify_code","value"=>$user->verify_code]) !!}
	{!! input_field(["label"=>"Inactive","name"=>"txtInactive","value"=>$user->inactive]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>
</div>
@endsection
