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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('Invoice_ID');
            $table->integer('Invoice_No');
            $table->string('Client_ID');
            $table->date('BILLINGSTARTDATE')->nullable(false);
            $table->date('BILLINGENDDATE')->nullable(false);
            $table->date('Due_DATE');
            $table->integer('Amount');
            $table->string('Payment_Status');
            $table->date('Payment_Date')->nullable(false);
            $table->date('Invoice_Generated_Date')->nullable(false);
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
        Schema::dropIfExists('invoices');
    }
};
