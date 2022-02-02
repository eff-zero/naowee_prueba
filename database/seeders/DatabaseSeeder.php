<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Customer;
use \App\Models\Address;
use \App\Models\Sale;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Customer::factory(10)->create();
        Address::factory(20)->create();
        Sale::factory(50)->create();

        // Carcula el total (subtotal + tasa de impuesto)
        foreach (Sale::all() as $sale) {
            $sale->tax = $sale->subtotal * 0.19; // tasa de impuesto IVA (0.19)
            $sale->total = $sale->tax + $sale->subtotal;
            $sale->save();
        }
    }
}
