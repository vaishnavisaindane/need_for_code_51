<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMongoExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mongo_exams', function (Blueprint $table) {
            $table->increments('_id');
            $table->String('sub_id');
            $table->String('exam_sub_name');
            $table->date('date');
            $table->time('time');
            $table->integer('duration');
            $table->integer('total_marks');
            $table->integer('no_of_que');
            $table->String('category');
            $table->String('show_result');
            $table->String('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mongo_exams');
    }
}
