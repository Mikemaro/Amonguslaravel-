<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lobbies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('title');
            $table->string('region');
            $table->string('language');
            $table->integer('players');
            $table->string('map');
            $table->boolean('competitive');
            $table->integer('imposters');

            $table->index('users_id');

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
        Schema::dropIfExists('lobbies');
    }
}
