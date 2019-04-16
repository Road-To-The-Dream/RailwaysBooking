<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->decimal('price', 6, 2);
            $table->enum('status', ['куплено', 'возвращенно']);
            $table->integer('station_id1');
            $table->integer('station_id2');
            $table->tinyInteger('place');
            $table->boolean('bed');
            $table->integer('train_id');
            $table->integer('carriage_id');
            $table->integer('trip_id');
            $table->integer('user_id');
            $table->integer('privilege_id');
            $table->timestamps();
            $table->foreign('station_id1')
                ->references('id')->on('stations')
                ->onDelete('cascade');
            $table->foreign('station_id2')
                ->references('id')->on('stations')
                ->onDelete('cascade');
            $table->foreign('train_id')
                ->references('id')->on('trains')
                ->onDelete('cascade');
            $table->foreign('carriage_id')
                ->references('id')->on('carriages')
                ->onDelete('cascade');
            $table->foreign('trip_id')
                ->references('id')->on('trips')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('privilege_id')
                ->references('id')->on('privileges')
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
        Schema::dropIfExists('tickets');
    }
}
