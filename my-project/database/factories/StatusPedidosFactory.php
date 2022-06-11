<?php

namespace Database\Factories;

use App\Models\StatusPedidos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StatusPedidos>
 */
class StatusPedidosFactory extends Factory
{
    protected $model = StatusPedidos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'nome' => $this->faker->name()
        ];
    }
}
