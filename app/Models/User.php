<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    protected $guarded = ['id'];
    use HasFactory, HasApiTokens;

    public function order() 
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }

    public function cart() 
    {
        return $this->hasOne(Cart::class, 'cart_id', 'id');
    }

}
