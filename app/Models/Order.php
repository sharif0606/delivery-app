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
    	'urgent_cost',
    	'note',
    	'pickup_date',
    	'delivery_date',
    	'status',
    ];

	public function pickupLocation(){
        return $this->belongsTo(Location::class,'pickup_location','id');
    }
    public function deliveryLocation(){
        return $this->belongsTo(Location::class,'delivery_location','id');
    }
    public function docType(){
        return $this->belongsTo(Type::class,'type_id','id');
    }
    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }
    public function deliveryMan(){
        return $this->belongsTo(User::class,'delivery_boy_id','id');
    }
    public function track(){
        return $this->hasMany(OrderTracking::class,'order_id','id');
    }
}
