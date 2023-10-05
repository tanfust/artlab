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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventName');
            $table->dateTime('eventDate');
            $table->unsignedBigInteger('creator_id'); // Foreign key to link the event to a creator (artist or user)
            $table->string('eventLocation');
            $table->string('eventDescription');
            $table->string('eventImage');

            // Add other event-related fields here
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('creators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};