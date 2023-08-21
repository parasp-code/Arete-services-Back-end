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
        Schema::create('hardware', function (Blueprint $table) {
            $table->id('Hardware_ID');
            $table->integer('Serial_Number');
            $table->string('Hardware_Device');
            $table->integer('Mac_Address');
            $table->ipAddress('IP_Address');
            $table->date('Installation_Date');  
            $table->date('Warranty_Date');  
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
        Schema::dropIfExists('hardware');
    }
};
