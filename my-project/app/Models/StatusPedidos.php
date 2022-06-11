<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'updated_at',
        'created_at'
    ];

    public function purchase_order()
    {
        return $this->hasOne(Purchase_Orders::class);
    }
    
}
