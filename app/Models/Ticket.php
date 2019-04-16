<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 * @package App\Models
 */
class Ticket extends Model
{
    /**
     * @return mixed
     */
    public function carriage()
    {
        return $this->belongsTo(Carriage::class);
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    }

    /**
     * @return mixed
     */
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

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
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
