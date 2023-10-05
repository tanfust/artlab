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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artwork_id'); // Foreign key to link the auction to an artwork
            $table->float('startingPrice'); // Starting price for the auction
            $table->dateTime('startDate'); // Auction start date and time
            $table->dateTime('endDate'); // Auction end date and time
            // Add other auction-related fields here
            $table->timestamps();

            $table->foreign('artwork_id')->references('id')->on('artworks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
};