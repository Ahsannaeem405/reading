<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProofreadDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proofread_details', function (Blueprint $table) {
            $table->id();
           
            $table->text('content')->nullable();
            $table->bigInteger('proofread_id')->unsigned();
            $table->foreign('proofread_id')->references('id')->on('readings')->onDelete('cascade');
            $table->text('user_content')->nullable();

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
        Schema::dropIfExists('proofread_details');
    }
}
