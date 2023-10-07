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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artwork_id'); // Foreign key to link the order to an artwork
            $table->decimal('totalAmount', 10, 2); // Total amount of the order
            $table->string('title'); // Title of the order
            $table->string('status'); // Status of the order (e.g. "pending", "active", "delivered", "cancelled")
            $table->string('description'); // Description of the order
            $table->string('image'); // Image description of the order
            $table->string('client'); // Client name
            // Add other order-related fields here
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
        Schema::dropIfExists('orders');
    }
};
