<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this   ->call(OfficeSeeder::class)
                ->call(EmployeeSeeder::class)
                ->call(CustomerSeeder::class)
                ->call(OrderSeeder::class)
                ->call(ProductLineSeeder::class)
                ->call(ProductSeeder::class)
                ->call(OrderDetailSeeder::class)
                ->call(PaymentSeeder::class)
                ;
    }
}
