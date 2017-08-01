<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Jokes extends Model
{
    protected $connection = "mongodb";
    protected $collection = "mycollection";
}
