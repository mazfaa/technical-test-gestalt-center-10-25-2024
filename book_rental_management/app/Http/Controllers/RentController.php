<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentRequest;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Rent;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RentController extends Controller
{
    public function index() {
        $rents = Rent::with(['book', 'customer'])->get();
        return view('rents.index', compact('rents'));
    }

    public function setAsReturned($id) {
        $rent = Rent::find($id);
        $rent->date_return = now();
        $rent->save();
        Alert::success('Success', 'The rent was setted as returned successfully.');
        return redirect()->route('rents.index');
    }

    public function create() {
        $customers = Customer::select('id', 'name')->get();
        $books = Book::select('id', 'title')->get();
        return view('rents.form', [
            'title' => 'Create',
            'rent' => new Rent(),
            'method' => 'post',
            'customers' => $customers,
            'books' => $books,
        ]);
    }

    public function store(RentRequest $request) {
        $request['date_rent'] = now();
        Rent::create($request->all());
        Alert::success('Success', 'Rent Created Successfully.');
        return redirect()->route('rents.index');
    }

    public function edit(Rent $rent, $customer, $book) {
        $customers = Customer::select('id','name')->get();
        $books = Book::select('id','title')->get();

        $customer = Customer::find($customer);
        $book = Book::find($book);
        return view('rents.form', [
            'title' => 'Edit',
            'rent' => $rent,
            'method' => 'put',
            'customers' => $customers,
            'books' => $books,
            'customer' => $customer,
            'book' => $book,
        ]);
    }

    public function update(RentRequest $request, Rent $rent) {
        $rent->update($request->all());
        Alert::success('Success', 'Rent Edited Successfully.');
        return redirect()->route('rents.index');
    }
}
