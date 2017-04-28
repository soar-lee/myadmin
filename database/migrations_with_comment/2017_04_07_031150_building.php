<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Building extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building', function ($table) {
            $table->increments('id');
            $table->string('name',32)->comment('建筑名称');
            $table->unsignedTinyInteger('type')->comment('设计风格类型');
            $table->unsignedTinyInteger('status')->comment('状态');
            $table->unsignedInteger('page_view')->comment('浏览次数');
            $table->timestamps();
            $table->comment('建筑表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building');
    }
}
