<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    protected $guarded =[];

    protected $dates = ['created_at', 'updated_at'];
    
    public function students(){
        return $this->belongsToMany(Students::class);
    }

    public function pairs(){
        return $this->belongsToMany(Pairs::class);
    }
}
