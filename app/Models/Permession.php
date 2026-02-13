<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permession extends Model
{
    //

    public function roles()
{
    return $this->hasMany(role::class,'permession_role');
}
}
