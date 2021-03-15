<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityRule extends Model
{
    protected $fillable = [
        'venue_id', 'facility_id'
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
