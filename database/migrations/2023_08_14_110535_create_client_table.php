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
        Schema::create('client_', function (Blueprint $table) {
            $table->id('Client_ID');
            $table->string('Client_Name');
            $table->integer('Client_Email');
            $table->string('Client_Contactnumber');
            $table->string('Client_Address');
            $table->string('Address_longitude');  
            $table->string('Address_latitude');
            $table->integer('Aadhar_id');
            $table->string('Aadhar_image');
            $table->string('Hardware_id');
            $table->integer('created_by'); //created_at
            $table->integer('updated_by'); //updated_at
            $table->timestamps(); //created_at - updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_');
    }
};
