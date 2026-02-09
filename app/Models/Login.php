<?php

use Illuminate\Database\Eloquent\Model;

class Login extends Model{
    protected $fillable = [
        'email',
        'password',
        'role',
    ];
}