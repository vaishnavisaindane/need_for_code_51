<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_m_s', function (Blueprint $table) {
           $table->integer('stu_id');
            $table->integer('stu_roll');
            $table->String('stu_name');
            $table->integer('yes_ans');
            $table->integer('no_ans');
            $table->String('result_json');
            $table->integer('dept_id');
            $table->integer('sub_id');
            $table->integer('exam_id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_m_s');
    }
}
