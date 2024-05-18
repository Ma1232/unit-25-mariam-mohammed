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
        Schema::create('tickets', function (Blueprint $table) {

       $table->id();
       $table->unsignedBigInteger('CustomerID');
       $table->foreign('CustomerID')->cascadeOnDelete()->references('id')->on('customers');
       $table->text('IssueDescription');
       $table->enum('status',['Open','Closed']);
       $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
