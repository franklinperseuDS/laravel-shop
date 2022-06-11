<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeproduto',
        'codbarras',
        'unityprice',
        'updated_at',
        'created_at'
    ];

    public function purchase_order()
    {
        return $this->hasMany(Purchase_Orders::class);
    }
}
