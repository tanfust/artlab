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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('articleTitle');
            $table->unsignedBigInteger('creator_id'); // Foreign key to link the blog to an artist (creator)
            $table->text('articleContent');
            $table->string('image');
            $table->timestamps();
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
        Schema::dropIfExists('articles');
    }
};