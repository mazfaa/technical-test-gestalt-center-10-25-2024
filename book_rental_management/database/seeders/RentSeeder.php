<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rents = collect([
            ['customer_id' => 1, 'book_id' => 1, 'date_rent' => '2024-01-01'],
            ['customer_id' => 1, 'book_id' => 2, 'date_rent' => '2024-01-01'],
            ['customer_id' => 1, 'book_id' => 3, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 4, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 5, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 6, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 7, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 8, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 9, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 10, 'date_rent' => '2024-01-06'],
            ['customer_id' => 1, 'book_id' => 11, 'date_rent' => '2024-01-06'],
        ]);

        $rents->each(function ($rent) {
            Rent::create($rent);
        });
    }
}
