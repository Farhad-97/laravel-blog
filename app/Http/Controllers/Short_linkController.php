<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Short_link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Short_linkController extends Controller{

	public function index(){
		$short_links=Short_link::paginate(10);
		return view("pages.erp.short_link.index_short_link",["short_links"=>$short_links]);
	}
	public function create(){

		return view("pages.erp.short_link.create_short_link",[]);
	}
	public function store(Request $request){
		$request->validate([
			'txtCode'=>'required|url',
		]);
		$short_link=new Short_link;
		$short_link->code=$request->txtCode;
		$short_link->link = Str::random(6);

		$short_link->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$short_link=Short_link::find($id);
		return view("pages.erp.short_link.show_short_link",["short_link"=>$short_link]);
	}
	public function edit(Short_link $short_link){

		return view("pages.erp.short_link.edit_short_link",["short_link"=>$short_link,]);
	}
	public function update(Request $request,Short_link $short_link){
		$short_link->code=$request->txtCode;
		$short_link->link=$request->txtLink;

		$short_link->update();
		return redirect()->route("short_links.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(Short_link $short_link){
		$short_link->delete();
		return redirect()->route("short_links.index")->with('success','Deleted Successfully.');
	}
}
