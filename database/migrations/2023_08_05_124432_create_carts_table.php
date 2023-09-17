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
        Schema::create('carts', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('product_id');
            $table->string('product_name');
            $table->float('product_price');
            $table->string('product_catagory');
            $table->string('product_images');
            $table->bigInteger('product_quantity')->default(1);
            $table->bigInteger('product_real_quantity');
            $table->string('product_brand');
            $table->string('product_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
