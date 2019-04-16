<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carriage
 * @package App\Models
 */
class Carriage extends Model
{
    /**
     * @return mixed
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * @return mixed
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * @return mixed
     */
    public function trains()
    {
        return $this->belongsToMany(Train::class, 'carriages_trains');
    }
}
