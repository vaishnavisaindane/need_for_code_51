<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMongoQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mongo_ques', function (Blueprint $table) {
            $table->increments('_id');
            $table->integer('exam_id');
            $table->String('question');
            $table->String('images');
            $table->String('correct_ans');
            $table->String('option_1');
            $table->String('option_2');
            $table->String('option_3');
            $table->String('option_4');
            $table->integer('mark_que_1');
            $table->integer('unit_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mongo_ques');
    }
}
