<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    public $timestamps = false;  
    protected $Fillable = [
        'user_id',
        'Produit_id'
    ];
}
