<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 * @package App\Models
 */
class Type extends Model
{
    /**
     * @return mixed
     */
    public function carriages()
    {
        return $this->hasMany(Carriage::class);
    }
}
