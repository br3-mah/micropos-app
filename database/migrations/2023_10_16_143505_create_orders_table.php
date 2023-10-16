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
            $table->bigIncrements('id');
            $table->string("billing_first_name")->nullable();
            $table->string("billing_last_name")->nullable();
            $table->string("billing_email")->nullable();
            $table->string("billing_country")->nullable();
            $table->string("billing_address_1")->nullable();
            $table->string("billing_city")->nullable();
            $table->string("billing_state")->nullable();
            $table->string("billing_phone")->nullable();
            $table->string("billing_postcode")->nullable();
            $table->string("shipping_first_name")->nullable();
            $table->string("shipping_last_name")->nullable();
            $table->string("shipping_company")->nullable();
            $table->string("shipping_country")->nullable();
            $table->string("shipping_address_1")->nullable();
            $table->string("shipping_address_2")->nullable();
            $table->string("shipping_city")->nullable();
            $table->string("shipping_postcode")->nullable();
            $table->string("order_comments")->nullable();
            $table->string("payment_method")->nullable();
            $table->string("order_uuid")->nullable();
            $table->string("order_referer")->nullable();
            $table->string("order_status")->nullable();
            $table->string("total_paid")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
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
