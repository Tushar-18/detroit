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
        Schema::create('users', function (Blueprint $table) {
            $table->user_id();
            $table->user_name();
            $table->user_email();
            $table->user_number();
            $table->user_adderss();
            $table->user_city();
            $table->user_stats();
            $table->user_pincode();
            $table->user_status();
            $table->user_role();
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
