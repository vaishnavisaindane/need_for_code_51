<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_students', function (Blueprint $table) {
            $table->integer('exam_id');
            $table->String('exam_sub_name');
            $table->integer('stu_roll');
            $table->String('stu_name');
            $table->String('dept_name');
            $table->String('email');
            $table->String('term');
            $table->String('login_pass');
            $table->integer('mob_num');
            $table->String('status');
            $table->String('login_status');
            $table->String('exam_done_or_not');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_students');
    }
}
