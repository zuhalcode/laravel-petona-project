<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product() 
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function order() 
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

}
