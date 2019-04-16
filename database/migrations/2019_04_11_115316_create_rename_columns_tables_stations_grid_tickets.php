<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenameColumnsTablesStationsGridTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stations_grid', function(Blueprint $table) {
            $table->renameColumn('station_id1', 'stationOfDeparture');
            $table->renameColumn('station_id2', 'stationOfArrival');
        });

        DB::statement('ALTER TABLE tickets CHANGE station_id1 stationOfDeparture INT(11)');
        DB::statement('ALTER TABLE tickets CHANGE station_id2 stationOfArrival INT(11)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stations_grid', function(Blueprint $table) {
            $table->renameColumn('stationOfDeparture', 'station_id1');
            $table->renameColumn('stationOfArrival', 'station_id2');
        });

        DB::statement('ALTER TABLE tickets CHANGE stationOfDeparture station_id1 INT(11)');
        DB::statement('ALTER TABLE tickets CHANGE stationOfArrival station_id2 INT(11)');
    }
}
