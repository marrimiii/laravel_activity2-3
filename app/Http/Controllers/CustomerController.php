<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // SHOW ALL CUSTOMERS
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        return view('customers.create');
    }

    // STORE NEW CUSTOMER
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index');
    }

    // SHOW SINGLE CUSTOMER (for VIEW button)
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    // SHOW EDIT FORM
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    // UPDATE CUSTOMER
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index');
    }

    // DELETE CUSTOMER
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index');
    }
}