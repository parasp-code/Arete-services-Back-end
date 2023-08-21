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
        Schema::create('package', function (Blueprint $table) {
            $table->id('Package_ID');
            $table->integer('Client_ID');
            $table->string('Package_Name');
            $table->string('Speed');
            $table->integer('Package_Amount');
            $table->date('Contract_Start_Date');  
            $table->date('Contract_End_Date');  
            $table->string('IsActive');  
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
        Schema::dropIfExists('package');
    }
};
