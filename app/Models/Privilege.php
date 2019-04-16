<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Privilege
 * @package App\Models
 */
class Privilege extends Model
{
    /**
     * @return mixed
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
