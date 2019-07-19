<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pairs extends Model
{
    public function topics()
    {
        return $this->hasMany(Topics::class);
    }

    public function cohorts()
    {

        return $this->hasOne(Cohorts::class);
    }
}
