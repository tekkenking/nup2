<?php

namespace App\Models;

class Dutystation extends Basemodel
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function profiles()
    {
        return $this->hasMany(Staffprofile::class);
    }
}