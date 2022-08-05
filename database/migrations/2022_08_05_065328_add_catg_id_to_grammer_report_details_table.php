<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatgIdToGrammerReportDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grammer_report_details', function (Blueprint $table) {
            //
            $table->bigInteger('catg_id')->unsigned();
            $table->foreign('catg_id')->references('id')->on('quest_categories')->onDelete('cascade');
            $table->integer('points')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grammer_report_details', function (Blueprint $table) {
            //
        });
    }
}
