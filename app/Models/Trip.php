<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trip
 * @package App\Models
 */
class Trip extends Model
{
    /**
     * @return mixed
     */
    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    /**
     * @return mixed
     */
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    /**
     * @return mixed
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
