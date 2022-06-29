<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable =[
        'users_id', 'products_id'
    ];

    /**
     * Get the user associated with the cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class, 'users_id', 'id');
    }
}
