<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feature_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bid_key')->unique()->nullable();
            $table->string('product_id')->nullable();
            $table->float('price', 9, 2)->nullable();
            $table->integer('days')->nullable();
            $table->integer('is_paid')->default(0);
            $table->integer('status')->default(0);
            $table->text('comments')->nullable();         
            
            $table->timestamps();
        });// Set the default value using a custom expression
        DB::statement('ALTER TABLE feature_products MODIFY bid_key INTEGER UNSIGNED NOT NULL DEFAULT FLOOR(1000 + RAND() * 9000)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_products');
    }
};
