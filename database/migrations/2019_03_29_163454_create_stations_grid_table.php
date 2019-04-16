<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsGridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations_grid', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('station_id1');
            $table->integer('station_id2');
            $table->integer('distance');
            $table->timestamps();
            $table->foreign('station_id1')
                ->references('id')->on('stations')
                ->onDelete('cascade');
            $table->foreign('station_id2')
                ->references('id')->on('stations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations_grid');
    }
}
