<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pairs extends Model
{
    protected $guarded =[];

    public function topics()
    {
        return $this->hasMany(Topics::class);
    }

    public function cohorts()
    {

        return $this->belongsToMany(Cohorts::class);
    }

    public function students()
    {

        return $this->belongsToMany(Students::class);
    }
}
