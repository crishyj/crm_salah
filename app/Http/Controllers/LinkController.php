<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Link;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = Link::all();
        return view('links.index', compact('data'));
    }

    public function create(Request $request){
        $validate_array = array(
            'name'=>'required|string|unique:users',
            'link'=>'required',
        );

        $request->validate($validate_array);

        Link::create([
            'name' => $request->get('name'),
            'link' => $request->get('link')
        ]);

        return response()->json('success');
    }

    public function edit(Request $request){
        $request->validate([
            'name'=>'required|string|unique:users',
            'link' => 'required',
        ]);
        $link = Link::find($request->get("id"));
        $link->name = $request->get("name");
        $link->link = $request->get("link");
        
        $link->save();
        return response()->json('success');
    }
}
