<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrders extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeropedido',
        'dtpedido',
        'client_id',
        'product_id',
        'status_pedido_id',
        'quantidade',
        'updated_at',
        'created_at'
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function status_pedido()
    {
        return $this->belongsTo(StatusPedidos::class);
    }
}
