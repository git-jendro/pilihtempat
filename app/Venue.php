<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name', 'desc'
    ];

    public function image()
    {
        return $this->hasMany(ImageRule::class);
    }

    public function facility()
    {
        return $this->hasMany(FacilityRule::class);
    }

    public function cowork()
    {
        return $this->hasMany(Coworker::class);
    }
}
