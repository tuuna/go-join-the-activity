<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sponsor_icon')->default('')->comment('主办方图标');
            $table->string('e_card')->default('')->comment('联系人一卡通照片');
            $table->string('sponsor_name',40)->comment('主办方名字');
            $table->string('contact_name',40)->comment('联系人姓名');
            $table->string('contact_email')->comment('联系人邮箱');
            $table->string('project_class')->comment('联系人专业年级');
            $table->string('contact_number',30)->commnet('联系电话');
            $table->string('student_number',30)->comment('联系人学号');
            $table->text('description')->comment('主办方简介');
            $table->string('website')->nullable()->comment('主办方官网');
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
        Schema::dropIfExists('sponsors');
    }
}
