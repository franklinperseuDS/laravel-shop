<?php

namespace Database\Seeders;

use App\Models\StatusPedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;

class StatusOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //STATUS ->Em Aberto, Pago ou Cancelado
        StatusPedidos::create([
            'nome' => "Em Aberto"
        ]);
        StatusPedidos::create([
            'nome' => "Pago"
        ]);

        StatusPedidos::create([
            'nome' => "Cancelado"
        ]);
    }
}
