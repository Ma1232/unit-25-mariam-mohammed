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
        Schema::create('jobs', function (Blueprint $table) {

            $table->id();
            $table->string('JobName');
            $table->unsignedBigInteger('TicketID');
            $table->foreign('TicketID')->cascadeOnDelete()->references('id')->on('tickets');
            $table->enum('Status',['Scheduled','Completed']);
            $table->timestamp('scheduled_at');
            $table->timestamps();
        


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
