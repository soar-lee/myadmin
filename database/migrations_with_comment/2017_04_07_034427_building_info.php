<?php
use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_info', function ($table){
            $table->unsignedInteger("bid")->comment('建筑id');
            $table->string('architect',32)->comment('建筑师');
            $table->string('address',256)->comment('建筑地址');
            $table->float('area')->comment('建筑面积');
            $table->unsignedSmallInteger('build_year')->comment('建筑年份');
            $table->string('photographer',64)->comment('摄影师');
            $table->string('light_engineer',64)->comment('灯光设计师');
            $table->string('tech_adviser',64)->comment('技术顾问');
            $table->string('econ_adviser',64)->comment('经济顾问');
            $table->string('sonic_adviser',64)->comment('声学顾问');
            $table->string('fire_adviser',64)->comment('消防顾问');
            $table->string('client',128)->comment('客户');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_info');
    }
}
