<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionTable extends Migration
{

    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qname');
            $table->string('qtext');
            $table->string('time');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('question');
    }
}
