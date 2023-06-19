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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default('vendor');
            $table->bigInteger('vendorId');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->tinyInteger('status');
            $table->enum('confirm', ['Yes', 'No']);
=======
            $table->tinyInteger('status')->default(1);
            $table->timestamp('banned_at')->nullable();
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
