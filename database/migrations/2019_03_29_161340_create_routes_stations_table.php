<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_stations', function (Blueprint $table) {
            $table->integer('route_id');
            $table->integer('station_id');
            $table->integer('order');
            $table->timestamps();
            $table->foreign('route_id')
                ->references('id')->on('routes')
                ->onDelete('cascade');
            $table->foreign('station_id')
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
        Schema::dropIfExists('routes_stations');
    }
}
