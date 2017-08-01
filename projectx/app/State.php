<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    return $this->belongsTo(State::class);
}
