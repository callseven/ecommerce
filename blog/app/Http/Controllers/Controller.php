<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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
public function edit($id)
{
    $customer = Customer::findOrFail($id);
 
    if ($customer) {
        return view('customers.form', compact('customer'));
    } else {
        return redirect()->back();
    }
}
public function update(Request $request, $id)
{
    $customer = Customer::where('id', $id)->update($request->except('_token', '_method'));
 
    if ($customer) {
        return redirect()->route('customers.index');
    }
}

public function destroy($id)
{
    $customer = Customer::where('id', $id)->delete();
       
    if ($customer) {
        return redirect()->route('customers.index');
    }
}