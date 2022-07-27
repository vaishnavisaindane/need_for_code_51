<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMongoSpecifisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mongo_specifis', function (Blueprint $table) {
            $table->increments('_id');
           $table->integer('exam_id');
            $table->integer('unit_no');
            $table->integer('unit_weightage');
             $table->integer('mark1');
             $table->integer('mark2');
             $table->integer('mark4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mongo_specifis');
    }
}
