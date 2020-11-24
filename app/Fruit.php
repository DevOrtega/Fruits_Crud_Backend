<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Fruit extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name', 'size', 'main_color'
    ];
}
