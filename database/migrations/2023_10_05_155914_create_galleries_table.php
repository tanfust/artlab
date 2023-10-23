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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id'); // Foreign key to link the gallery to a creator (artist or user)
            $table->string('galleryName');
            // Add other gallery-related fields here
            $table->timestamps();
            $table->string('photo'); // The gallery's photo
            $table->foreign('creator_id')->references('id')->on('creators'); // Assuming a "creators" table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
};