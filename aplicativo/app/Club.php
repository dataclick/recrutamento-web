<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['name'];

    public function partners()
    {
        return $this->belongsToMany(\App\Partner::class);
    }
}
