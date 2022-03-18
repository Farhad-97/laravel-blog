<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class RoleController extends Controller{

	public function index(){
		$roles=Role::paginate(10);
		return view("pages.erp.role.index_role",["roles"=>$roles]);
	}
	public function create(){

		return view("pages.erp.role.create_role",[]);
	}
	public function store(Request $request){

		$role=new Role;
		$role->name=$request->txtName;

		$role->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$role=Role::find($id);
		return view("pages.erp.role.show_role",["role"=>$role]);
	}
	public function edit(Role $role){

		return view("pages.erp.role.edit_role",["role"=>$role,]);
	}
	public function update(Request $request,Role $role){

		$role->name=$request->txtName;

		$role->update();
		return redirect()->route("roles.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(Role $role){
		$role->delete();
		return redirect()->route("roles.index")->with('success','Deleted Successfully.');
	}
}
