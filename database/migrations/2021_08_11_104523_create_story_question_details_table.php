<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoryQuestionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_question_details', function (Blueprint $table) {
            $table->id();
            $table->string('option')->nullable();
            $table->string('correct')->default('no');
            $table->bigInteger('question_id')->unsigned();


            $table->foreign('question_id')->references('id')->on('story_questions')->onDelete('cascade');


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
        Schema::dropIfExists('story_question_details');
    }
}
