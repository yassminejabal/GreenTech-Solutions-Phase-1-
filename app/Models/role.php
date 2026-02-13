<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public $timestamps = false;
    public $fillable = [
        'name'
    ];

    public function users()
{
    return $this->hasMany(User::class);
}

public function permessions()
{
    return $this->belongsToMany(Permession::class,'permession_role')->withTimestamps();
}


}















