<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
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
            $table->string('email', 150);
            $table->string('password', 150);
            $table->text('address');
            $table->string('occupation', 150)->nullable();
            $table->string('gender');
            $table->string('city', 150);
            $table->string('state', 150);
            $table->string('zip', 150);
            $table->boolean('check');
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
}
