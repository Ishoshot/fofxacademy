<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $guarded =[];
    public $timestamps = false;

    public function pairs()
    {
        return $this->belongsToMany(Pairs::class);
    }
}
