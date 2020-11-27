<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');  //测试修改器
            $table->tinyInteger('is_admin'); //测试属性转换
            $table->text('data'); //测试数组类型转换
            $table->tinyInteger('status');  //测试访问器
            $table->timestamps();  //会自动增加created_at  updated_at两个字段
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form');
    }
}
