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
        'weight_form',
        'weight_to',
    	'base_price',
    	'weight_cost',
    ];
}
