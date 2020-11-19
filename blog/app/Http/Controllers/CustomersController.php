<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Customer;
 
class CustomersController extends Controller
{


public function index()
{
    $customers = Customer::all();
    return $customers;
}
public function index()
{
    $customers = Customer::all();
    return view('customers.grid', compact('customers'));
}
public function create()
{
    return view('customers.form');
}

public function store(Request $request)
{
    $customer = Customer::create($request->all());
       
    if($customer) {
        return redirect()->route('customers.index');
    }
}
