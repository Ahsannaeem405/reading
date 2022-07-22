<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuilContQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quil_cont_questions', function (Blueprint $table) {
            $table->id();

            $table->text('first_sentence')->nullable();
            $table->text('second_sentence')->nullable();
            $table->integer('points')->nullable();
            $table->text('answer')->nullable();

            $table->bigInteger('quilconct_id')->unsigned();
            $table->foreign('quilconct_id')->references('id')->on('readings')->onDelete('cascade');
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
        Schema::dropIfExists('quil_cont_questions');
    }
}
