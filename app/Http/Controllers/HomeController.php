<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Country;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return redirect(route('customer.index'));
    }
    
    public function create(Request $request){       
        $validate_array = array(
            'name'=>'required|string|unique:users',
            'email'=>'required',
            'country_id'=>'required',
            'phone'=>'required|string'
        );
        
        $request->validate($validate_array);
        $phone = "+".$request->get('prefix').$request->get('phone');
        
        Customer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),           
            'phone' => $phone,
            'country_id'=> $request->get('country_id')           
        ]);

        return response()->json('success');
    }
}
