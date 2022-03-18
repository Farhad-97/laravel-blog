<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class UserController extends Controller{

	public function index(){
		$users=User::paginate(10);
		return view("pages.erp.user.index_user",["users"=>$users]);
	}
	public function create(){
		$roles=Role::all();

		return view("pages.erp.user.create_user",["roles"=>$roles]);
	}
	public function store(Request $request){

		$user=new User;
		$user->role_id=$request->cmbRoleId;
		$user->username=$request->txtUsername;
		$user->full_name=$request->txtFull_name;
		$user->password=$request->txtPassword;
		$user->email=$request->txtEmail;
		if(isset($request->filePhoto)){
		$user->photo=$request->filePhoto;
		}
		$user->mobile=$request->txtMobile;
		$user->verify_code=$request->txtVerify_code;
		$user->inactive=$request->txtInactive;

		$user->save();
		if(isset($request->filePhoto)){
			$imageName = $user->id.'.'.$request->filePhoto->extension();
			$user->photo=$imageName;
			$user->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$user=User::find($id);
		return view("pages.erp.user.show_user",["user"=>$user]);
	}
	public function edit(User $user){
		$roles=Role::all();

		return view("pages.erp.user.edit_user",["user"=>$user,"roles"=>$roles]);
	}
	public function update(Request $request,User $user){

		$user->role_id=$request->cmbRoleId;
		$user->username=$request->txtUsername;
		$user->full_name=$request->txtFull_name;
		$user->password=$request->txtPassword;
		$user->email=$request->txtEmail;
		if(isset($request->filePhoto)){
		$user->photo=$request->filePhoto;
		}
		$user->mobile=$request->txtMobile;
		$user->verify_code=$request->txtVerify_code;
		$user->inactive=$request->txtInactive;

		if(isset($request->filePhoto)){
			$imageName = $user->id.'.'.$request->filePhoto->extension();
			$user->photo=$imageName;
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		$user->update();
		return redirect()->route("users.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(User $user){
		$user->delete();
		return redirect()->route("users.index")->with('success','Deleted Successfully.');
	}
}
