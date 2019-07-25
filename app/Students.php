<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $guarded = [];

    public function cohorts(){
        return $this->hasOne(Cohort::class);
    }
}
