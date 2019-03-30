<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        "brand",
        "profession",
        "about",
        "contact",
        "cover",
        "profile",
        "email",
        "instagram",
        "facebook",
    ];
}
