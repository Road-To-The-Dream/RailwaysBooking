<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Train
 * @package App\Models
 */
class Train extends Model
{
    /**
     * @return mixed
     */
    public function carriages()
    {
        return $this->belongsToMany(Carriage::class, 'carriages_trains');
    }

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
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
