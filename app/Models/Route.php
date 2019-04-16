<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Route
 * @package App\Models
 */
class Route extends Model
{
    /**
     * @return mixed
     */
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    /**
     * @return mixed
     */
    public function stations()
    {
        return $this->belongsToMany(Station::class);
    }
}
