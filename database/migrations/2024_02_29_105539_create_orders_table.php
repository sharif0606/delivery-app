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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->bigInteger('delivery_boy_id')->nullable();
            $table->bigInteger('type_id');
            $table->boolean('is_urgent')->default(false);
            $table->string('pickup_address',500)->nullable();
            $table->bigInteger('pickup_location');
            $table->string('delivery_address',500);
            $table->bigInteger('delivery_location');
            $table->text('product');
            $table->decimal('weight',10,2);
            $table->decimal('price',10,2)->default(0);
            $table->decimal('delivery_cost_base',10,2)->default(0);
            $table->decimal('delivery_cost_weight',10,2)->default(0);
            $table->decimal('urgent_cost',10,2)->default(0);
            $table->text('note')->nullable(); 
            $table->date('pickup_date')->nullable(); 
            $table->date('delivery_date')->nullable(); 
            $table->integer('status')->default(0)->comment('0=pending,1=accpted,2=processing,3=completed,4=return'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
