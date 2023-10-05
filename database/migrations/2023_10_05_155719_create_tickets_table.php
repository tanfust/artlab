<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id'); // Foreign key to link the ticket to an event
            $table->integer('quantityAvailable'); // Available ticket quantity
            $table->decimal('price', 10, 2); // Ticket price
            $table->string('ticketType'); // Ticket type (e.g. "VIP", "General Admission", etc.)
            $table->string('userEmail');
            $table->string('userName');
            // Add other ticket-related fields here
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};