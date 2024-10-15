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
        Schema::create('user_pay_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('method')->nullable();
            $table->string('account_bank')->nullable();
            $table->string('account_name')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->string('account_cvc')->nullable();
            $table->string('account_exp')->nullable();
            $table->string('account_sort')->nullable();
            $table->string('phone')->nullable();
            $table->string('network')->nullable();
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_pay_accounts');
    }
};
