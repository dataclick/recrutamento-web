<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name'];

    public function clubs()
    {
        return $this->belongsToMany(\App\Club::class);
    }
}
