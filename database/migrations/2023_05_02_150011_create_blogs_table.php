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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('imagePath');
            $table->string('contentTitle', 100);
            $table->string('author');
            $table->enum('category', ['', 'art', 'beauty&health', 'clothes', 'electronic', 'food&drink', 'furniture', 'webinar', 'bazar']);
<<<<<<< HEAD
            $table->string('content', 5000);
=======
<<<<<<< HEAD
            $table->string('content', 5000);
=======
            $table->string('content');
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};