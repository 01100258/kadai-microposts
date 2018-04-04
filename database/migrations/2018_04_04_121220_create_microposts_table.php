<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMicropostsTable extends Migration
{
    public function up()
    {
        Schema::create('microposts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('content');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    
    public function down()
    {
        Schema::drop('microposts');
    }
}