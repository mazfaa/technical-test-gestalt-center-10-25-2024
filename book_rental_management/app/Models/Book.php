<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'price_rent', 'book_category'];

    public function rents() {
        return $this->hasMany(Rent::class);
    }
}
