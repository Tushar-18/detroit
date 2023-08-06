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
        Schema::create('members', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_pwd');
            $table->bigInteger('user_number');
            $table->string('user_address');
            $table->string('user_city');
            $table->string('user_states');
            $table->integer('user_pincode');
            $table->string('user_pic')->default('default.jpg');
            $table->string('user_status')->default('Inactive');
            $table->string('user_role')->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
