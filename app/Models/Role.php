<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App\Models
 */
class Role extends Model
{
    /**
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
