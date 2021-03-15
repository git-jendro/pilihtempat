<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'name', 'icon'
    ];

    public function rules()
    {
        return $this->hasMany(FacilityRule::class);
    }
}
