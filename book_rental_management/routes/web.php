<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('books/unrented', [BookController::class, 'showUnrentedBooks'])->name('books.unrented');
Route::get('books/filter', [BookController::class, 'filterBooksByPrice'])->name('books.filter');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/edit/{book:id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book:id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book:id}', [BookController::class, 'delete'])->name('books.destroy');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/frequent', [CustomerController::class, 'frequentBorrowers'])->name('customers.frequent');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/edit/{customer:id}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer:id}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer:id}', [CustomerController::class, 'delete'])->name('customers.destroy');

Route::get('/rents', [RentController::class, 'index'])->name('rents.index');
Route::get('/rents/create', [RentController::class, 'create'])->name('rents.create');
Route::post('/rents', [RentController::class, 'store'])->name('rents.store');
Route::get('/rents/edit/{rent:id}/{customer}/{book}', [RentController::class, 'edit'])->name('rents.edit');
Route::put('/rents/{rent:id}', [RentController::class, 'update'])->name('rents.update');
Route::get('/returned/{id}', [RentController::class, 'setAsReturned'])->name('rents.setAsReturned');