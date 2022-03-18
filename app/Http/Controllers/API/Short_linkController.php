<?php

namespace App\Http\Controllers\API;
use App\Models\Short_link;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Short_linkController extends Controller
{

    public function index()
    {
        return json_encode(["Short_link"=>Short_link::All()]);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
		$request->validate([
			'txtCode'=>'required|url',
		]);
		$short_link=new Short_link;
		$short_link->code=$request->txtCode;
		$short_link->link = Str::random(6);

		$short_link->save();
        return json_encode(['success'=>'Saved']);
    }

  
    public function show($id)
    {

    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {

    }

   
    public function destroy($id)
    {
		Short_link::find($id)->delete();
		return json_encode(["success"=>$id]);
    }
}
