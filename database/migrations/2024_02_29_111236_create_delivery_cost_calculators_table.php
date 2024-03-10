<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('delivery_cost_calculators', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from_location_id');
            $table->bigInteger('to_location_id');
            $table->bigInteger('type_id');
            $table->decimal('weight_from',10,2);
            $table->decimal('weight_to',10,2)->nullable();
            $table->decimal('base_price',10,2);
            $table->decimal('weight_cost',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_cost_calculators');
    }
};
