<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_id'); // Foreign key to link the artwork to a gallery
            $table->string('imageName'); // Name or path of the artwork image
            $table->string('Description');
            $table->string('Name');
            $table->float('Price'); // Price of the artwork
            $table->timestamps();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artworks');
    }
};
