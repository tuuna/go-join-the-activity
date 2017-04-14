<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_applies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60)->comment('姓名');
            $table->string('phone_number',100)->comment('电话号码');
            $table->string('email',100)->comment('邮箱');
            $table->string('student_number',100)->comment('学号');
            $table->integer('sponsor_id')->unsigned()->index();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('activity_applies');
    }
}
