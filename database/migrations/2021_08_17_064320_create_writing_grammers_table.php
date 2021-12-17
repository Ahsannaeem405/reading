<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingGrammersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_grammers', function (Blueprint $table) {
            $table->id();
            $table->string('top_heading')->nullable();
            $table->string('q_1')->nullable();
            $table->string('q_2')->nullable();
            $table->string('q_3')->nullable();
            $table->string('correct')->nullable();

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
        Schema::dropIfExists('writing_grammers');
    }
}
