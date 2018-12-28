<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('challenges', function (Blueprint $table){
            $table->longText('pre_exercise_code');
            $table->longText('sample_code');
            $table->longText('solution');
            $table->longText('sct');
            $table->longText('hint');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenges');
    }
}
