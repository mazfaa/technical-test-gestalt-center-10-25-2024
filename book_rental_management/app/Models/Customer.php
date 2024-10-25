<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'identity_card_number', 'address'];

    public function rents() {
        return $this->hasMany(Rent::class);
    }

}
