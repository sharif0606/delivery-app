<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCostCalculator extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_location_id',
        'to_location_id',
        'type_id',
        'weight_from',
        'weight_to',
    	'base_price',
    	'weight_cost',
    ];

    public function fromCountry(){
        return $this->belongsTo(Location::class,'from_location_id','id');
    }
    public function toCountry(){
        return $this->belongsTo(Location::class,'to_location_id','id');
    }
    public function docType(){
        return $this->belongsTo(Type::class,'type_id','id');
    }
}
