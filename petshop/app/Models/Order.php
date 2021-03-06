<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_id', 'order_id');
    }
}
