<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrammerSubmitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grammer_submit_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grammer_submit_id')->unsigned();
            $table->bigInteger('grammer_id')->unsigned();
            $table->integer('correct')->default(0);
            $table->integer('point')->default(0);
            $table->string('answer')->nullable();


            $table->foreign('grammer_submit_id')->references('id')->on('grammer_submits')->onDelete('cascade');
            $table->foreign('grammer_id')->references('id')->on('writing_grammers')->onDelete('cascade');


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
        Schema::dropIfExists('grammer_submit_details');
    }
}
