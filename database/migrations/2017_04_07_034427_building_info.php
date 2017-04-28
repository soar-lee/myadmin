<?php
use Illuminate\Support\Facades\Schema;
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
        Schema::create('building_info', function (Blueprint $table){
            $table->unsignedInteger("bid");
            $table->string('architect',32);
            $table->string('address',256);
            $table->float('area');
            $table->unsignedSmallInteger('build_year');
            $table->string('photographer',64);
            $table->string('light_engineer',64);
            $table->string('tech_adviser',64);
            $table->string('econ_adviser',64);
            $table->string('sonic_adviser',64);
            $table->string('fire_adviser',64);
            $table->string('client',128);
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
