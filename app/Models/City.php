<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * @package App\Models
 */
class City extends Model
{
    /**
     * @return mixed
     */
    public function stations()
    {
        return $this->hasMany(Station::class);
    }
}
