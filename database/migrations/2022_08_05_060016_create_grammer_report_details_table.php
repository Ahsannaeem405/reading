<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrammerReportDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grammer_report_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grammer_report_id')->unsigned();
            $table->foreign('grammer_report_id')->references('id')->on('grammer_reports')->onDelete('cascade');

            $table->string('correct_answer')->nullable();
            $table->string('user_answer')->nullable();
            $table->string('correct')->default('no');

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
        Schema::dropIfExists('grammer_report_details');
    }
}
