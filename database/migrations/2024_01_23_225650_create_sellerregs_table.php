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
        Schema::create('sellerregs', function (Blueprint $table) {
            $table->id();
            $table->string('seller_name');
            $table->string('seller_type');
            $table->string('seller_address');
            $table->string('business_name');
            $table->string('shop_name');
            $table->string('pickup_address');
            $table->string('email');
            $table->string('contact');
            $table->string('phone_no');
            $table->string('password');
            $table->string('confirm_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellerregs');
    }
};
