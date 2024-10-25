<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ['customer_id', 'book_id', 'date_rent'];

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
