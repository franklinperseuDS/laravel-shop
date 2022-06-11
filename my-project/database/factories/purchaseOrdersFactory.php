<?php

namespace Database\Factories;

use App\Models\Clients;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PurchaseOrders;
use App\Models\StatusPedidos;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class purchaseOrdersFactory extends Factory
{

    protected $model = PurchaseOrders::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numeropedido' => $this->faker->numerify('###'),
            'dtpedido' => Carbon::now(),
            'client_id' => Clients::factory(),
            'product_id' => Products::factory(),
            'status_pedido_id' => StatusPedidos::factory(),
            'quantidade' => $this->faker->numerify('##')
        ];
    }
}
