<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Customer;
use App\Models\Country;
use Auth;
use App\Exports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;


class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        config(['site.page' => 'user']);
        $countries = Country::all();
        $mod = new Customer();
        $country_id = $name = $phone_number = '';
//        if ($request->get('country_id') != ""){
//            $country_id = $request->get('country_id');
//            $mod = $mod->where('country_id', "$country_id");
//        }
//        if ($request->get('name') != ""){
//            $name = $request->get('name');
//            $mod = $mod->where('name', 'LIKE', "%$name%");
//        }
//        if ($request->get('phone_number') != ""){
//            $phone_number = $request->get('phone_number');
//            $mod = $mod->where('phone_number', 'LIKE', "%$phone_number%");
//        }

        $data = $mod->orderBy('created_at', 'desc')->get();
        return view('customers.index', compact('data', 'countries', 'country_id'));
    }

    public function create(Request $request){

        $validate_array = array(
            'name'=>'required|string|unique:users',
            'email'=>'required',
            'country_id'=>'required',
            'phone'=>'required|string'
        );

        $request->validate($validate_array);

        // $phone =  $request->get('prefix').$request->get('phone');

        Customer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'country_id'=> $request->get('country_id')
        ]);

        return response()->json('success');
    }

    public function edit(Request $request){
        $request->validate([
            'name'=>'required',
            'title' => 'required',
        ]);
        $customer = Customer::find($request->get("id"));
        $customer->name = $request->get("name");
        $customer->title = $request->get("title");
        $customer->email = $request->get("email");
        $customer->age = $request->get("age");
        $customer->gender = $request->get("gender");
        $customer->governorate = $request->get("governorate");
        $customer->city = $request->get("city");
        $customer->street = $request->get("street");
        $customer->post = $request->get("post");
        $customer->po = $request->get("po");
        $customer->country_id = $request->get("country");

        $customer->save();
        return response()->json('success');
    }


    public function delete($id){
        $customer = Customer::find($id);
        if(!$customer){
            return back()->withErrors(["delete" => 'Something went wrong.']);
        }
        $customer->delete();
        return back()->with("success", 'Deleted Successfully');
    }

    public function export() 
    {
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }

}
