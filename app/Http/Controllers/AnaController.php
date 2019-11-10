<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Country;

class AnaController extends Controller
{
    public function index(Request $request){
        $camp = $request->input('camp');
        return view('ana', compact('camp'));
    }

    public function create(Request $request){

        $validate_array = array(
            'email'=>'required',
            'country_id'=>'required',
            'phone'=>'required|string'
        );

        $request->validate($validate_array);

        $name = $request->get('fname')." ".$request->get('lname');

        $phone = "+".$request->get('Prefix').$request->get('phone');

        Customer::create([
            'name' => $name,
            'email' => $request->get('email'),
            'phone' => $phone,
            'country_id'=> $request->get('country_id'),
            'link_id' => $request->get('serial_num')
        ]);

        return response()->json('success');
    }
}
