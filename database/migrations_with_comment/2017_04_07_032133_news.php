<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function ($table){
            $table->increments('id');
            $table->string('title')->index()->comment('标题');
            $table->text('content')->comment('内容');
            $table->unsignedTinyInteger('type')->comment('资讯类型');
            $table->unsignedTinyInteger('status')->comment('资讯状态');
            $table->unsignedInteger('page_view')->comment('浏览次数');
            $table->timestamps();
            $table->comment('资讯表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
