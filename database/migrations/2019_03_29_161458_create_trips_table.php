<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->dateTime('time_start');
            $table->dateTime('time_finish');
            $table->integer('duration_in_minutes');
            $table->decimal('rate', 5, 2);
            $table->integer('train_id');
            $table->integer('route_id');
            $table->timestamps();
            $table->foreign('train_id')
                ->references('id')->on('trains')
                ->onDelete('cascade');
            $table->foreign('route_id')
                ->references('id')->on('routes')
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
        Schema::dropIfExists('trips');
    }
}
