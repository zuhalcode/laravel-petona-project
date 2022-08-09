<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function cart() 
    {
        return $this->hasMany(Cart::class, 'cart_id', 'id');
    }

    

}
