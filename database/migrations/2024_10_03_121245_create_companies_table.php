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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // Foreign key referencing the users table
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    
            // General information about the company
            $table->string('name');
            $table->string('reg_no')->nullable();
            $table->string('slogan')->nullable();
            $table->string('color')->nullable();
            $table->string('color2')->nullable();
            $table->string('color3')->nullable();
            $table->string('tpin')->nullable();
            $table->longText('about')->nullable();
    
            // Addresses
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
    
            // Contact details
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->string('email')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_person_phone')->nullable();
    
            // Logos
            $table->string('logo')->nullable();
            $table->string('logo2')->nullable();
            $table->string('logo3')->nullable();
    
            // Websites
            $table->string('website')->nullable();
            $table->string('website2')->nullable();
    
            // Category and type
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            
            // Other details
            $table->date('date_born')->nullable();
            $table->unsignedBigInteger('type_id')->nullable(); // Foreign key for company type
            
            // Timestamps and soft delete
            $table->softDeletes();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
