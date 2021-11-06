<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member1_id');
            $table->foreign('member1_id')->references('id')->on('members');
            $table->foreignId('member2_id');
            $table->foreign('member2_id')->references('id')->on('members');
            $table->integer('player1_score');
            $table->integer('player2_score');
            $table->timestamp('date_played');
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
        Schema::dropIfExists('games');
    }
}
