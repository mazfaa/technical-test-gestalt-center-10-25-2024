<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = collect([
            ['name' => 'Isaac Newton', 'identity_card_number' => '3203011404040009', 'address' => 'Jalan Pasteur, Kota Bandung.'],
            ['name' => 'Nikola Tesla', 'identity_card_number' => '3203011404040008', 'address' => 'Jalan Ir. H. Juanda, Kota Cianjur.'],
        ]);

        $customers->each(function ($customer) {
            Customer::create($customer);
        });
    }
}
