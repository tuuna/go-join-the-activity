<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     * 活动中对应的主办方可能有多个，为一对多的关系
     * 活动的标签为多对多关系，单独有表
     * 活动的分类为一对多关系
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('sponsor_id')->unsigned()->comment('主办方ID');
            $table->integer('category_id')->unsigned();
            $table->integer('follow_count')->default(0)->comment('收藏量');
            $table->integer('click_count')->default(0)->comment('点击量');
            $table->string('title',40)->comment('活动标题');
            $table->string('pic')->comment('活动图片');
            $table->string('hold_time')->comment('预计举办时间');
            $table->integer('contain_count')->default(50)->comment('活动容纳人数');
            $table->text('activity_background')->comment('活动背景介绍');
            $table->text('guest_intro')->comment('嘉宾介绍_宣讲人');
            $table->text('activity_agenda')->comment('活动议程_内容简述');
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
        Schema::dropIfExists('activities');
    }
}
