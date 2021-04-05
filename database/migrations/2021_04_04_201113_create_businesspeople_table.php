<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesspeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesspeople', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('phone')->unique();
            $table->string('state');
            $table->string('city');
            $table->string('entrepreneur')->nullable();
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
        Schema::dropIfExists('businesspeople');
    }
}
