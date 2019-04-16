<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Station
 * @package App\Models
 */
class Station extends Model
{
    /**
     * @return mixed
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return mixed
     */
    public function routes()
    {
        return $this->belongsToMany(Route::class, 'routes_stations');
    }

    /**
     * @return mixed
     */
    public function stationGrid()
    {
        return $this->belongsTo(StationGrid::class);
    }

    /**
     * @return mixed
     */
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
