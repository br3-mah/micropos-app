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
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->text('about')->nullable();
            $table->text('address')->nullable();
            $table->text('address2')->nullable();
            $table->text('address3')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
