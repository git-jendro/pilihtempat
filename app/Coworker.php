<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coworker extends Model
{
    protected $fillable = [
        'name', 'address', 'location'
    ];

    public function venue()
    {
        return $this->hasMany(Venue::class);
    }
}
