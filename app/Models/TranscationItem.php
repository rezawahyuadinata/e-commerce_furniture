<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranscationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'product_id', 'transaction_id'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
}
