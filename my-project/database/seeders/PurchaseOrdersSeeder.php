<?php

namespace Database\Seeders;

use App\Models\PurchaseOrders;
use Illuminate\Database\Seeder;

class PurchaseOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PurchaseOrders::factory(2)->create();
    }
}
