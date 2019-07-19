<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    public function cohorts(){
        return $this->hasOne(cohort::class);
    }
}
