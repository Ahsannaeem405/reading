<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatgQuestIdToStoryQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('story_questions', function (Blueprint $table) {
            //
            $table->bigInteger('catg_quest_id')->unsigned();
            $table->foreign('catg_quest_id')->references('id')->on('quest_categories')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('story_questions', function (Blueprint $table) {
            //
        });
    }
}
