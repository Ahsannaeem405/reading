<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoryQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->integer('points')->nullable();
            $table->bigInteger('story_id')->unsigned();

            $table->foreign('story_id')->references('id')->on('readings')->onDelete('cascade');

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
        Schema::dropIfExists('story_questions');
    }
}
