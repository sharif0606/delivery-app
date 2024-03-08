<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
    	'delivery_boy_id',
    	'type_id',
    	'is_urgent',
    	'pickup_address',
    	'pickup_location',
    	'delivery_address',
    	'delivery_location',
        'product',
    	'weight',
    	'price',
    	'delivery_cost_base',
    	'delivery_cost_weight',
    	'note',
    	'pickup_date',
    	'delivery_date',
    	'status',
    ];
}
