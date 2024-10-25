<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function frequentBorrowers() {
        $customers = Customer::withCount('rents')->having('rents_count', '>', 10)->get();
        return view('customers.frequent', compact('customers'));
    }

    public function create() {
        return view('customers.form', [
            'title' => 'Create',
            'customer' => new Customer(),
            'method' => 'post'
        ]);
    }

    public function store(CustomerRequest $request) {
        Customer::create($request->all());
        Alert::success('Success', 'Customer Created Successfully.');
        return redirect()->route('customers.index');
    }

    public function edit(Customer $customer) {
        return view('customers.form', [
            'title' => 'Edit',
            'customer' => $customer,
            'method' => 'put'
        ]);
    }

    public function update(CustomerRequest $request, Customer $customer) {
        $customer->update($request->all());
        Alert::success('Success', 'Customer Edited Successfully.');
        return redirect()->route('customers.index');
    }

    public function delete(Customer $customer) {
        $customer->delete();
        Alert::success('Success', 'Customer Deleted Successfully.');
        return redirect()->route('customers.index');
    }
}
