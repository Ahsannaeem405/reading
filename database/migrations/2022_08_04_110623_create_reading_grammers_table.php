<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingGrammersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reading_grammers', function (Blueprint $table) {
            $table->id();
            $table->string('q_part1')->nullable();
            $table->string('q_part2')->nullable();
            $table->string('q_part3')->nullable();
            $table->string('correct_answer')->nullable();

            $table->bigInteger('catg_id')->unsigned();
            $table->foreign('catg_id')->references('id')->on('quest_categories')->onDelete('cascade');
            $table->integer('points')->nullable();
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
        Schema::dropIfExists('reading_grammers');
    }
}
