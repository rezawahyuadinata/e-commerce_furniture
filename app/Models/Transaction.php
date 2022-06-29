<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id', 'name',  'email', 'payment', 'payment_url', 'address', 'phone',
        'total_price', 'status', 'courier'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id', 'users_id');
    }
}
