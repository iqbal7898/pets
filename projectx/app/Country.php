<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    return $this->belongsTo(Country::class);
}
